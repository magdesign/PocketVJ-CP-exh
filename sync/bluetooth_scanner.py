#!/usr/bin/env python3

import time
from beacontools import BeaconScanner, EddystoneTLMFrame, EddystoneFilter

print("scans for 10s")








def callback(bt_addr, rssi, packet, additional_info):
    #print((bt_addr, rssi, packet, additional_info))
    print((bt_addr, additional_info))




scanner = BeaconScanner(callback,
    # following line scans only for my exact namespace
    #device_filter=EddystoneFilter(namespace="12345678901234678901"),
)


scanner.start()
time.sleep(10)
scanner.stop()






