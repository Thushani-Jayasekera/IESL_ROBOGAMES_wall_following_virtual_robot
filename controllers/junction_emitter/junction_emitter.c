#include <webots/emitter.h>
#include <webots/robot.h>
#include <string.h>
#include <stdio.h>

#define TIME_STEP 64
#define WB_CHANNEL_BROADCAST -1

int main(int argc, char **argv) {
  wb_robot_init();
  
  WbDeviceTag emitter = wb_robot_get_device("emitter");
  
  char message[128];
  sprintf(message, argv[1]);
  //printf("%s\n", argv[1]);
  while (wb_robot_step(TIME_STEP) != -1) {
    wb_emitter_send(emitter, message, strlen(message) + 1);
  }
  wb_robot_cleanup();
  return 0;
}