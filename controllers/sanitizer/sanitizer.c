#include <webots/distance_sensor.h>
#include <webots/robot.h>
#include <webots/supervisor.h>
#include <string.h>
#include <stdio.h>

#define TIME_STEP 64
#define WB_CHANNEL_BROADCAST -1

int main(int argc, char **argv) {
  wb_robot_init();
  
  char name[128];
  sprintf(name, "%s.%s", argv[1], argv[1]);
  
  WbDeviceTag ds[4];
  char ds_names[4][10] = {"dist_1", "dist_2", "dist_3", "dist_4"};
  for (int i = 0; i < 4; i++) {
    ds[i] = wb_robot_get_device(ds_names[i]);
    wb_distance_sensor_enable(ds[i], TIME_STEP);
  }
  // printf("%d\n", wb_supervisor_node_get_id(wb_supervisor_node_get_from_def("SANITIZER.SANITIZER_0")));
  while (wb_robot_step(TIME_STEP) != -1) {
    
    long ds_values[4];
    for (int i = 0; i < 4; i++)
      ds_values[i] = wb_distance_sensor_get_value(ds[i]);
  
    if (ds_values[0] < 950 || ds_values[1] < 950 || ds_values[2] < 950 || ds_values[3] < 950) {
      
      WbNodeRef san_shape = wb_supervisor_node_get_from_def(name);
      if (san_shape) wb_supervisor_node_remove(san_shape);
      else printf("no shape\n");
      printf("%s\n", name);
      break;
    }
  }
  
  wb_robot_cleanup();
  return 0;
}
// strcat("SANITIZER_0.", argv[1])