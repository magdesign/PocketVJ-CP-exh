#!/usr/bin/env python3

import time

from beacontools import BeaconScanner, EddystoneTLMFrame, EddystoneFilter

def callback(bt_addr, rssi, packet, additional_info):
    print((bt_addr, rssi, packet, additional_info))

# scan for all TLM frames of beacons in the namespace "12345678901234678901"
scanner = BeaconScanner(callback,
    # remove the following line to see packets from all beacons
    # below entry is only looking for my exact namespace
#    device_filter=EddystoneFilter(namespace="4927cc84cab307e6952f"),
    #packet_filter=EddystoneTLMFrame
)
scanner.start()
time.sleep(10)
scanner.stop()

