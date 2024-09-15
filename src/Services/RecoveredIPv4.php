<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Services;

/**
 * @link https://www.iana.org/assignments/ipv4-recovered-address-space/ipv4-recovered-address-space.xhtml
 */
class RecoveredIPv4
{
    final const RECOVERED_IPS = [
        "https://rdap.apnic.net/" => [
            "43.236.0.0/26",
            "43.245.0.0/26",
            "43.254.0.0/28",
            "45.64.0.0/18",
            "45.65.16.0/20",
            "45.112.0.0/27",
            "45.248.0.0/28",
            "137.59.0.0/24",
            "139.5.0.0/22",
            "144.48.0.0/20",
            "146.196.32.0/21",
            "150.107.0.0/25",
            "150.129.0.0/22",
            "150.242.0.0/25",
            "157.119.0.0/27",
            "160.19.20.0/17",
            "160.19.48.0/18",
            "160.19.64.0/16",
            "160.19.208.0/20",
            "160.19.224.0/18",
            "160.20.0.0/16",
            "160.20.40.0/17",
            "160.20.48.0/18",
            "160.20.72.0/16",
            "160.20.222.0/19",
            "160.202.8.0/18",
            "160.202.32.0/20",
            "160.202.128.0/22",
            "160.238.0.0/16",
            "160.238.12.0/19",
            "160.238.33.0/18",
            "160.238.34.0/19",
            "160.238.58.0/21",
            "160.238.64.0/22",
            "162.12.208.0/19",
            "162.12.240.0/20",
            "163.47.4.0/19",
            "163.47.20.0/20",
            "163.47.32.0/21",
            "163.47.47.0/25",
            "163.53.0.0/24",
            "192.12.109.0/17",
            "192.26.110.0/18",
            "192.51.188.0/19",
            "192.75.137.0/17",
            "192.135.90.0/19",
            "192.135.99.0/18",
            "192.140.128.0/21",
            "192.144.78.0/17",
            "192.144.80.0/18",
            "192.145.228.0/18",
            "192.156.144.0/16",
            "192.156.220.0/19",
            "192.188.82.0/19",
            "192.197.113.0/18",
            "199.21.172.0/22",
            "199.212.57.0/21",
            "204.52.191.0/22",
            "216.250.96.0/24"
        ],
        "https://rdap.arin.net/registry/" => [
            "45.2.0.0/22",
            "45.16.0.0/25",
            "45.32.0.0/26",
            "45.72.0.0/25",
            "45.223.0.0/27",
            "66.218.132.0/18",
            "74.91.48.0/22",
            "144.168.0.0/21",
            "149.248.0.0/25",
            "160.19.0.0/17",
            "160.19.24.0/18",
            "160.19.104.0/18",
            "160.19.160.0/17",
            "160.20.208.0/17",
            "160.20.230.0/18",
            "160.20.232.0/19",
            "160.20.251.0/19",
            "160.202.64.0/21",
            "160.238.22.0/20",
            "160.238.31.0/21",
            "160.238.41.0/19",
            "160.238.42.0/21",
            "160.238.102.0/21",
            "162.12.216.0/19",
            "162.12.224.0/19",
            "192.94.77.0/19",
            "192.107.1.0/16",
            "192.133.103.0/18",
            "192.140.4.0/16",
            "192.144.128.0/20",
            "192.147.11.0/17",
            "192.156.202.0/18",
            "192.172.244.0/19",
            "192.188.81.0/18",
            "192.231.238.0/22",
            "198.17.79.0/19",
            "207.115.112.0/26",
            "208.73.240.0/20",
            "209.107.128.0/24"
        ],
        "https://rdap.lacnic.net/rdap/" => [
            "45.4.0.0/23",
            "45.65.128.0/22",
            "45.68.0.0/24",
            "45.160.0.0/27",
            "45.224.0.0/27",
            "72.44.16.0/18",
            "128.201.0.0/21",
            "131.196.0.0/22",
            "160.19.44.0/18",
            "160.19.168.0/19",
            "160.19.200.0/18",
            "160.19.240.0/21",
            "160.20.20.0/16",
            "160.20.32.0/15",
            "160.20.64.0/16",
            "160.20.80.0/18",
            "160.20.160.0/18",
            "160.20.218.0/18",
            "160.20.225.0/16",
            "160.20.242.0/18",
            "160.20.246.0/19",
            "160.238.24.0/20",
            "160.238.63.0/22",
            "160.238.104.0/22",
            "160.238.128.0/24",
            "162.12.196.0/18",
            "164.163.0.0/23",
            "192.12.112.0/17",
            "192.12.118.0/17",
            "192.67.23.0/17",
            "192.68.185.0/17",
            "192.75.4.0/15",
            "192.83.207.0/20",
            "192.91.254.0/22",
            "192.92.154.0/18",
            "192.135.95.0/20",
            "192.135.185.0/19",
            "192.140.1.0/14",
            "192.140.8.0/17",
            "192.140.16.0/20",
            "192.141.0.0/22",
            "192.144.64.0/16",
            "192.144.72.0/15",
            "192.144.96.0/19",
            "192.145.192.0/20",
            "192.153.12.0/16",
            "198.97.38.0/18",
            "204.225.42.0/20",
            "216.98.208.0/22"
        ],
        "https://rdap.db.ripe.net/" => [
            "45.8.0.0/24",
            "45.65.64.0/21",
            "45.66.0.0/23",
            "45.80.0.0/26",
            "45.128.0.0/26",
            "139.28.0.0/23",
            "147.78.0.0/24",
            "152.89.0.0/23",
            "160.19.92.0/19",
            "160.19.180.0/19",
            "160.20.96.0/17",
            "160.20.108.0/18",
            "160.20.144.0/18",
            "160.20.214.0/18",
            "160.20.229.0/17",
            "160.20.248.0/18",
            "160.202.16.0/19",
            "160.238.21.0/19",
            "160.238.36.0/20",
            "160.238.52.0/21",
            "160.238.60.0/21",
            "160.238.96.0/20",
            "160.238.112.0/23",
            "162.12.200.0/19",
            "192.42.65.0/15",
            "192.54.244.0/19",
            "192.70.192.0/18",
            "192.83.216.0/18",
            "192.94.78.0/19",
            "192.135.100.0/17",
            "192.140.2.0/15",
            "192.144.0.0/18",
            "192.144.75.0/16",
            "192.145.0.0/20",
            "192.145.224.0/18",
            "192.172.232.0/18",
            "192.188.248.0/20",
            "192.251.230.0/22",
            "204.11.0.0/17",
            "204.48.32.0/16",
            "205.211.83.0/22"
        ],
        "https://rdap.afrinic.net/rdap/" => [
            "45.96.0.0/26",
            "45.192.0.0/26",
            "45.240.0.0/27",
            "66.251.128.0/24",
            "139.26.0.0/23",
            "146.196.128.0/22",
            "154.16.0.0/21",
            "160.19.36.0/17",
            "160.19.60.0/19",
            "160.19.96.0/18",
            "160.19.112.0/18",
            "160.19.152.0/18",
            "160.19.188.0/20",
            "160.19.192.0/18",
            "160.19.232.0/20",
            "160.20.24.0/17",
            "160.20.112.0/17",
            "160.20.213.0/17",
            "160.20.217.0/17",
            "160.20.221.0/18",
            "160.20.226.0/17",
            "160.20.252.0/20",
            "160.238.11.0/19",
            "160.238.48.0/19",
            "160.238.50.0/19",
            "160.238.57.0/20",
            "160.238.101.0/20",
            "161.123.0.0/25",
            "164.160.0.0/21",
            "192.12.110.0/18",
            "192.12.116.0/17",
            "192.47.36.0/17",
            "192.51.240.0/18",
            "192.70.200.0/17",
            "192.75.236.0/19",
            "192.83.208.0/20",
            "192.91.200.0/18",
            "192.142.0.0/23",
            "192.145.128.0/20",
            "192.145.230.0/18",
            "204.8.204.0/19",
            "208.85.156.0/21"
        ]
    ];
}
