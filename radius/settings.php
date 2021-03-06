/*
 * SoftEther RADIUS accounting PHP script
 * Copyright (C) 2015 Andras Kosztyu (kosztyua@vipcomputer.hu)
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
 
<?php
$apipass = "Spectrum2015420"; // softether hub password
$radiussrv = "31.186.251.70"; // radius server address
$radiuspass = "MiNLLbnU5JUZaElr"; // radius secret
$radiusport = "1813"; // radius server accounting port
$database = "/var/radius/sessions.db"; // temporary database location
$tmpdir = "/tmp"; // temporary directory
$hubname = "PRIMARY"; // softether hub name
$softetherip = "127.0.0.1"; // softether hub address
$vpncmd = "/usr/local/vpnserver/vpncmd";
?>
