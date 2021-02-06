from controller import Robot

from controller import Robot

TIME_STEP = 64
robot = Robot()
from enum import Enum

SPEED = 4
# create the Robot instance.
class Color(Enum):
    RED = 0
    GREEN = 1
    BLUE = 2
    CYAN = 3
    NONE = 4

color_names = ["red", "green", "blue", "cyan"]
#filenames = ["red_blob.png", "green_blob.png", "blue_blob.png", "cyan_blob.png"]
pause_counter = 0

ds = []
dsNames = ["ds_left", "ds_right","ds_middle","ds_ml","ds_mr"]
for i in range(5):
    ds.append(robot.getDistanceSensor(dsNames[i]))
    ds[i].enable(TIME_STEP)
wheels = []
wheelsNames = ['wheel1', 'wheel2', 'wheel3', 'wheel4']
for i in range(4):
    wheels.append(robot.getMotor(wheelsNames[i]))
    wheels[i].setPosition(float('inf'))
    wheels[i].setVelocity(0.0)

camera = robot.getCamera("camera")
camera.enable(TIME_STEP)
width = camera.getWidth()
height = camera.getHeight()

receiver = robot.getReceiver('receiver')
receiver.enable(TIME_STEP)
compass = robot.getCompass('compass')
compass.enable(TIME_STEP)
directions = []
def outputEmitterMinIndex(receiver):
    lis = ((receiver.getData().decode('utf-8'))[: -1]).split(",")
    receiver.disable()
    lis = list(map(int, lis))   # [N, E, S, W]
    minim = 1000
    for i in lis:
        if (i > 0) and (i < minim):
            minim = i
    return lis.index(minim)

def turnDigit(compass, emInd, directions):  # 0 - Go straight.
    lis = compass.getValues()   # 1 - Turn by 90 deg.
    compass.disable()           # 2 - Turn by 270 deg.
    if round(lis[0]) == 1.0:    # Heading North
        directions.append("N")
        if emInd == 0:
            return 0
        elif emInd == 1:
            return 1
        elif emInd == 3:
            return 2
    elif round(lis[2]) == -1.0: # Heading East
        directions.append("E")
        if emInd == 0:
            return 2
        elif emInd == 1:
            return 0
        elif emInd == 2:
            return 1
    elif round(lis[0]) == -1.0: # Heading South
        directions.append("S")
        if emInd == 1:
            return 2
        elif emInd == 2:
            return 0
        elif emInd == 3:
            return 1
    elif round(lis[2]) == 1.0: # Heading West
        directions.append("W")
        if emInd == 0:
            return 1
        elif emInd == 2:
            return 2
        elif emInd == 3:
            return 0

def turn_R():
    avoidObstacleCounter=0
    while robot.step(TIME_STEP) != -1:
            leftSpeed = 3.0
            rightSpeed = -3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==20:
                leftSpeed = 0
                rightSpeed = 0
                wheels[0].setVelocity(leftSpeed)
                wheels[1].setVelocity(rightSpeed)
                wheels[2].setVelocity(leftSpeed)
                wheels[3].setVelocity(rightSpeed)
                break
    while robot.step(TIME_STEP) != -1:
        
        leftSpeed = 3.0
        rightSpeed = 3.0
        wheels[0].setVelocity(leftSpeed)
        wheels[1].setVelocity(rightSpeed)
        wheels[2].setVelocity(leftSpeed)
        wheels[3].setVelocity(rightSpeed)
        #print(avoidObstacleCounter)
        avoidObstacleCounter+=1
        if avoidObstacleCounter==30:         
            break
def turn_L():
    avoidObstacleCounter=0
    while robot.step(TIME_STEP) != -1:
            leftSpeed = -3.0
            rightSpeed = 3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==20:
                leftSpeed = 0
                rightSpeed = 0
                wheels[0].setVelocity(leftSpeed)
                wheels[1].setVelocity(rightSpeed)
                wheels[2].setVelocity(leftSpeed)
                wheels[3].setVelocity(rightSpeed)
                break
    while robot.step(TIME_STEP) != -1:
        
        leftSpeed = 3.0
        rightSpeed = 3.0
        wheels[0].setVelocity(leftSpeed)
        wheels[1].setVelocity(rightSpeed)
        wheels[2].setVelocity(leftSpeed)
        wheels[3].setVelocity(rightSpeed)
        #print(avoidObstacleCounter)
        avoidObstacleCounter+=1
        if avoidObstacleCounter==30:
                     
            break
    
def st():
    avoidObstacleCounter=0
    while robot.step(TIME_STEP) != -1:
        
        leftSpeed = 3.0
        rightSpeed = 3.0
        wheels[0].setVelocity(leftSpeed)
        wheels[1].setVelocity(rightSpeed)
        wheels[2].setVelocity(leftSpeed)
        wheels[3].setVelocity(rightSpeed)
        #print(avoidObstacleCounter)
        avoidObstacleCounter+=1
        if avoidObstacleCounter==55:            
            break    

def turn_180():
    avoidObstacleCounter=0
    while robot.step(TIME_STEP) != -1:
        
        leftSpeed = -3.0
        rightSpeed = 3.0
        wheels[0].setVelocity(leftSpeed)
        wheels[1].setVelocity(rightSpeed)
        wheels[2].setVelocity(leftSpeed)
        wheels[3].setVelocity(rightSpeed)
        #print(avoidObstacleCounter)
        avoidObstacleCounter+=1
        if avoidObstacleCounter==40:
            
            break
    
def cam():
    image = camera.getImage()
    side=""
    obj=""
    red = 0
    green = 0
    blue = 0
    #width of 0-20px 1/2 height
    for i in range(0, 20):
        for j in range(0, int(height / 2)):
            red = camera.imageGetRed(image, width, i, j)
            blue = camera.imageGetBlue(image, width, i, j)
            green = camera.imageGetGreen(image, width, i, j)
    if(red!=0 and green!=0 and blue!=0):
        #print(red / (red + green + blue),green / (red + green + blue),blue / (red + green + blue))
        if (red/(red+green+blue)>0.45):
            current_blob = Color.RED.value
        elif ((green > 3 * red) and (green > 3 * blue)):
            current_blob = Color.GREEN.value
        elif (blue / (red + green + blue) > 0.45):
            if(red / (red + green + blue)<0.1 and green>red):
                current_blob = Color.CYAN.value
            else:
                current_blob = Color.BLUE.value

        else:
            current_blob = Color.NONE
        # print(current_blob)

        if (current_blob == Color.NONE):
            pass
        else:
            #print("Looks like I found a", color_names[current_blob],"0-20");
            side="L"
            obj=color_names[current_blob]
        # width of 20-59px 1/2 height
    for i in range(20,59):
        for j in range(0, int(height / 2)):
            red = camera.imageGetRed(image, width, i, j)
            blue = camera.imageGetBlue(image, width, i, j)
            green = camera.imageGetGreen(image, width, i, j)
    if(red!=0 and green!=0 and blue!=0):
        #print(red / (red + green + blue),green / (red + green + blue),blue / (red + green + blue))
        if(red / (red + green + blue)<0.4 and green / (red + green + blue)<0.4 and blue / (red + green + blue)<0.4):
            current_blob = Color.NONE
        if (red/(red+green+blue)>0.45):
            current_blob = Color.RED.value
        elif ((green > 3 * red) and (green > 3 * blue)):
            current_blob = Color.GREEN.value
        elif (blue / (red + green + blue) > 0.45):
            if (red / (red + green + blue) < 0.1 and green > red):
                current_blob = Color.CYAN.value
            else:
                current_blob = Color.BLUE.value
        else:
            current_blob = Color.NONE
        # print(current_blob)

        if (current_blob == Color.NONE):
            pass
        #else:
            #print("Looks like I found a", color_names[current_blob],"20-59");
    for i in range(59,80):
        for j in range(0, int(height / 2)):
            red = camera.imageGetRed(image, width, i, j)
            blue = camera.imageGetBlue(image, width, i, j)
            green = camera.imageGetGreen(image, width, i, j)
    if(red!=0 and green!=0 and blue!=0):
        #print(red / (red + green + blue),green / (red + green + blue),blue / (red + green + blue))
        if (red/(red+green+blue)>0.45):
            current_blob = Color.RED.value
        elif ((green > 3 * red) and (green > 3 * blue)):
            current_blob = Color.GREEN.value
        elif (blue / (red + green + blue) > 0.45):
            if (red / (red + green + blue) < 0.1 and green > red):
                current_blob = Color.CYAN.value
            else:
                current_blob = Color.BLUE.value
        else:
            current_blob = Color.NONE
        # print(current_blob)

        if (current_blob == Color.NONE):
            pass
        #else:
            #print("Looks like I found a", color_names[current_blob],"60-80");
            # width of 100-128px 1/2 height
    for i in range(100, 128):
                for j in range(0, int(height / 2)):
                    red = camera.imageGetRed(image, width, i, j)
                    blue = camera.imageGetBlue(image, width, i, j)
                    green = camera.imageGetGreen(image, width, i, j)
    if (red != 0 and green != 0 and blue != 0):
                #print(red / (red + green + blue),green / (red + green + blue),blue / (red + green + blue))
                if (red / (red + green + blue) > 0.45):
                    current_blob = Color.RED.value
                elif ((green > 3 * red) and (green > 3 * blue)):
                    current_blob = Color.GREEN.value
                elif (blue / (red + green + blue) > 0.45):
                    if (red / (red + green + blue) < 0.1 and green > red):
                        current_blob = Color.CYAN.value
                    else:
                        current_blob = Color.BLUE.value
                else:
                    current_blob = Color.NONE
                # print(current_blob)

                if (current_blob == Color.NONE):
                    pass
                else:
                    #print("Looks like I found a", color_names[current_blob], "100-128");
                    side="R"
                    obj=color_names[current_blob]
    return side,obj 
                      
def turnDigitBackward(emInd, directions):
    if directions[-1] == "N":
        if emInd == 0:
            return 0
        elif emInd == 1:
            return 2
        elif emInd == 3:
            return 1
    elif directions[-1] == "E":
        if emInd == 0:
            return 1
        elif emInd == 1:
            return 0
        elif emInd == 2:
            return 2
    elif directions[-1] == "S":
        if emInd == 1:
            return 1
        elif emInd == 2:
            return 0
        elif emInd == 3:
            return 2
    elif directions[-1] == "W":
        if emInd == 0:
            return 2
        elif emInd == 2:
            return 1
        elif emInd == 3:
            return 0
    directions.pop()                    
avoid_obstacle_counter = 0

while robot.step(TIME_STEP) != -1:
   
    x=6
    avoidObstacleCounter=0
    #leftSpeed = 3.0
    #rightSpeed = 3.0
    #wheels[0].setVelocity(leftSpeed)
    #wheels[1].setVelocity(rightSpeed)
    #wheels[2].setVelocity(leftSpeed)
    #wheels[3].setVelocity(rightSpeed)
    if receiver.getQueueLength() == 25:
        x=turnDigit(compass, outputEmitterMinIndex(receiver),directions)
        
        for i in range(0,60):
            receiver.nextPacket()
        #print(x)  
    if x==1:
        while robot.step(TIME_STEP) != -1:
            leftSpeed = 3.0
            rightSpeed = -3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==20:
                leftSpeed = 0
                rightSpeed = 0
                wheels[0].setVelocity(leftSpeed)
                wheels[1].setVelocity(rightSpeed)
                wheels[2].setVelocity(leftSpeed)
                wheels[3].setVelocity(rightSpeed)
                print(directions) 
                break
        while robot.step(TIME_STEP) != -1:
            leftSpeed = 3.0
            rightSpeed = 3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==35:
                x=6           
                break
        receiver.enable(TIME_STEP)
        compass.enable(TIME_STEP)                       
    elif x==2:
        while robot.step(TIME_STEP) != -1:
            leftSpeed = -3.0
            rightSpeed = 3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==18:
                leftSpeed = 0
                rightSpeed = 0
                wheels[0].setVelocity(leftSpeed)
                wheels[1].setVelocity(rightSpeed)
                wheels[2].setVelocity(leftSpeed)
                wheels[3].setVelocity(rightSpeed)
                break  
        while robot.step(TIME_STEP) != -1:
            leftSpeed = 3.0
            rightSpeed = 3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==35:
                print(directions) 
                x=6
                break
        receiver.enable(TIME_STEP)
        compass.enable(TIME_STEP)         
    else:
        receiver.enable(TIME_STEP)
        compass.enable(TIME_STEP)
        print(directions) 
         
    left_speed = 1.875
    right_speed = 1.875
    ds_values = []
    for i in range(5):
        ds_values.append(ds[i].getValue())    
    if (ds_values[0]<360) and (ds_values[0]<ds_values[1]):
        #avoid_obstacle_counter -= 1
        left_speed = 3.0
        right_speed = -3.0  
    elif (ds_values[1]<360) and (ds_values[0]>ds_values[1]):
        #avoid_obstacle_counter -= 1
        left_speed = -3.0
        right_speed = 3.0
    if ds_values[2]<800:
        if (ds_values[0]==1000):
            left_speed = -0.3
            right_speed = +3.0
        elif (ds_values[1]==1000):
            left_speed = +3.0
            right_speed = -0.3
        elif (ds_values[0]<ds_values[1]):
            left_speed = 3.0
            right_speed = -3.0
        elif (ds_values[1]<ds_values[0]):
            left_speed = -3.0
            right_speed = 3.0
    wheels[0].setVelocity(left_speed)
    wheels[1].setVelocity(right_speed)
    wheels[2].setVelocity(left_speed)
    wheels[3].setVelocity(right_speed)
                 

    s,o=cam()
    if o=="blue":
        if s=="L" and (ds_values[2]<400 or ds_values[3]<600):
            turn_R()
            turn_L()
            st()
            
        elif s=="R" and (ds_values[2]<400 or ds_values[4]<600):
            turn_L()
            turn_R()
            st()
            
    if o=="green" and ds_values[2]<800 :
        st()
        turn_180()
        """left_speed=0
        right_speed=0
        wheels[0].setVelocity(left_speed)
        wheels[1].setVelocity(right_speed)
        wheels[2].setVelocity(left_speed)
        wheels[3].setVelocity(right_speed)
        break"""
          
avoid_obstacle_counter = 0
while robot.step(TIME_STEP) != -1:
    x=6
    avoidObstacleCounter=0
    #leftSpeed = 3.0
    #rightSpeed = 3.0
    #wheels[0].setVelocity(leftSpeed)
    #wheels[1].setVelocity(rightSpeed)
    #wheels[2].setVelocity(leftSpeed)
    #wheels[3].setVelocity(rightSpeed)
    if receiver.getQueueLength() == 45:
        x=turnDigitBackward(outputEmitterMinIndex(receiver),directions)
        for i in range(0,90):
            receiver.nextPacket()
        #print(x)  
    if x==1:
        while robot.step(TIME_STEP) != -1:
            leftSpeed = 3.0
            rightSpeed = -3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==20:
                leftSpeed = 0
                rightSpeed = 0
                wheels[0].setVelocity(leftSpeed)
                wheels[1].setVelocity(rightSpeed)
                wheels[2].setVelocity(leftSpeed)
                wheels[3].setVelocity(rightSpeed)
                break
        while robot.step(TIME_STEP) != -1:
            leftSpeed = 3.0
            rightSpeed = 3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==40:
                x=6           
                break
        receiver.enable(TIME_STEP)
        compass.enable(TIME_STEP)                       
    elif x==2:
        while robot.step(TIME_STEP) != -1:
            leftSpeed = -3.0
            rightSpeed = 3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==20:
                leftSpeed = 0
                rightSpeed = 0
                wheels[0].setVelocity(leftSpeed)
                wheels[1].setVelocity(rightSpeed)
                wheels[2].setVelocity(leftSpeed)
                wheels[3].setVelocity(rightSpeed)
                break  
        while robot.step(TIME_STEP) != -1:
            leftSpeed = 3.0
            rightSpeed = 3.0
            wheels[0].setVelocity(leftSpeed)
            wheels[1].setVelocity(rightSpeed)
            wheels[2].setVelocity(leftSpeed)
            wheels[3].setVelocity(rightSpeed)
            #print(avoidObstacleCounter)
            avoidObstacleCounter+=1
            if avoidObstacleCounter==40:
                x=6
                break
        receiver.enable(TIME_STEP)
        compass.enable(TIME_STEP)         
    else:
        receiver.enable(TIME_STEP)
        compass.enable(TIME_STEP)
         
    left_speed = 1.875
    right_speed = 1.875
    ds_values = []
    for i in range(5):
        ds_values.append(ds[i].getValue())    
    if (ds_values[0]<350) and (ds_values[0]<ds_values[1]):
        #avoid_obstacle_counter -= 1
        left_speed = 3.0
        right_speed = -3.0  
    elif (ds_values[1]<350) and (ds_values[0]>ds_values[1]):
        #avoid_obstacle_counter -= 1
        left_speed = -3.0
        right_speed = 3.0
    if ds_values[2]<800:
        if (ds_values[0]==1000):
            left_speed = -0.3
            right_speed = +3.0
        elif (ds_values[1]==1000):
            left_speed = +3.0
            right_speed = -0.3
        elif (ds_values[0]<ds_values[1]):
            left_speed = 3.0
            right_speed = -3.0
        elif (ds_values[1]<ds_values[0]):
            left_speed = -3.0
            right_speed = 3.0
    wheels[0].setVelocity(left_speed)
    wheels[1].setVelocity(right_speed)
    wheels[2].setVelocity(left_speed)
    wheels[3].setVelocity(right_speed)
                 

    s,o=cam()
    if o=="blue":
        if s=="L" and (ds_values[2]<400 or ds_values[3]<500):
            turn_R()
            turn_L()
            st()
        elif s=="R" and (ds_values[2]<400 or ds_values[4]<500):
            turn_L()
            turn_R()
            st()
