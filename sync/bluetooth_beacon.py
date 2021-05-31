#!/usr/env python3

# -*- coding: utf-8 -*-
"""
Created on Mon May 2021
@author: Nachiket Gokhale
@initiator: Marc-Andre Gasser
made for PocketVJ Exhibition
@web: https://pocketvj.com
"""

import time  
import os   
from beacontools import BeaconScanner, EddystoneFilter # EddystoneTLMFrame (not needed, was imported earlier)


beacon1="3f9c7795ddcc9920997d"
beacon2="fbfd15706aef5c1c91de"
beacon3="8954cc84cab307e6952f"

# beacon_list and command_list should be of the same length
# commands corresponting to each beacon are in command_list

command1= 'echo this is 1'
command2= 'echo this is 2'
command3= 'echo this is 2'

beacon_list  = [beacon1,beacon2,beacon3]
command_list = [command1,command2,command3]

# this function checks if 'namespace' and 'instance' are in additional_info
# then it loops over beacon_list and command_list and checks if each beacon is equal to additional_info['namespace']
# it prints the id of the beacon, executes bash command and sleeps
def callback(bt_addr,rssi,packet,additional_info):
    # need to check if keys() method is supported, because additional_info can be None
    # better way to check is to see if packet is an instance of EddystoneUIDFrame 
    if isinstance(additional_info,dict):               
        if 'namespace' in additional_info.keys() and 'instance' in additional_info.keys():      
            for _idx,(_bcon,_cmd) in enumerate(zip(beacon_list,command_list),1):
                if _bcon == additional_info['namespace']:
                    print('-'*60)          
                    print('Beacon {} found'.format(_idx))  # print device info
                    print('Distance {}'.format(rssi))      # print distance (rssi)
                    print('-'*60)
                    os.system(_cmd)                        # execute bash command. os.system waits for command to finish
                    time.sleep(60)                       # sleep - turned off for now


device_filter_list = []
for _bcon in beacon_list:
    device_filter_list.append(EddystoneFilter(namespace=_bcon))

scanner = BeaconScanner(callback,device_filter=device_filter_list)
scanner.start()

print('Press Ctrl+C to exit...')
while True:
    try:
        time.sleep(10)
    except KeyboardInterrupt as e:
        break
scanner.stop()
print('Exiting due to Ctrl+C event. Goodbye!' )

