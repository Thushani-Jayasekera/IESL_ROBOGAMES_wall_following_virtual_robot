#include <webots/distance_sensor.h>
#include <webots/robot.h>
#include <webots/supervisor.h>
#include <string.h>
#include <stdio.h>

#define TIME_STEP 64
#define WB_CHANNEL_BROADCAST -1

int main(int argc, char **argv) {
  wb_robot_init();
  
  WbDeviceTag ds[3];
  char ds_names[3][10] = {"dist_1", "dist_2", "dist_3"};
  int mintot = 3000;
  int prev = 3000;
  for (int i = 0; i < 3; i++) {
    ds[i] = wb_robot_get_device(ds_names[i]);
    wb_distance_sensor_enable(ds[i], TIME_STEP);
  }
  
  while (wb_robot_step(TIME_STEP) != -1) {
    int tot = 0;
    int val;
    for (int i = 0; i < 3; i++){
      val = wb_distance_sensor_get_value(ds[i]);
      tot += val;
    }
    //printf("%d\n", tot);
    if (tot < mintot) mintot = tot;
    if (prev > mintot) printf("Min updated: %d\n", 3000 - mintot);
    prev = mintot;
    // printf("%d %d %d %d\n", sens[0], sens[1], sens[2], sens[3]);
  }
  printf("%d\n", 3000 - mintot);
  wb_robot_cleanup();
  return 0;
}