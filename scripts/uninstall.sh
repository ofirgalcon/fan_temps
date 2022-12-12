#!/bin/bash

# Remove fan_temps script
rm -f "${MUNKIPATH}preflight.d/fan_temps"

# Remove fan_temps.plist
rm -f "${CACHEPATH}fan_temps.plist"

# Remove smc and smc_legacy
rm -f "${MUNKIPATH}/smc"
rm -f "${MUNKIPATH}/smc_legacy"

