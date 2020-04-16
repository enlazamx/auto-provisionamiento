<<VOIP CONFIG FILE>>Version:2.0002

<SIP CONFIG MODULE>
SIP  Port          :5060
STUN Server        :
STUN Port          :3478
STUN Refresh Time  :50
SIP Wait Stun Time :800
Extern NAT Addrs   :
Reg Fail Interval  :32
SIP Pswd Encryption:0
Strict BranchPrefix:0
Enable RFC4475     :1
SIP invite strict  :1
Notify Reboot      :1
--SIP Line List--  :
SIP1 Phone Number  :<?php echo $extension ?>

SIP1 Display Name  :<?php echo $display_name ?>

SIP1 Sip Name      :
SIP1 Register Addr :<?php echo $server_ip ?>

SIP1 Register Port :5060
SIP1 Register User :<?php echo $extension ?>

SIP1 Register Pswd :<?php echo $secret ?>

SIP1 Register TTL  :3600
SIP1 Enable Reg    :1
SIP1 Proxy Addr    :<?php echo $server_ip ?>

SIP1 Proxy Port    :5060
SIP1 Proxy User    :<?php echo $extension ?>

SIP1 Proxy Pswd    :<?php echo $secret ?>

SIP1 BakProxy Addr :
SIP1 BakProxy Port :5060
SIP1 Enable Failbac:0
SIP1 Signal Crypto :0
SIP1 SigCrypto Key :
SIP1 Media Crypto  :0
SIP1 MedCrypto Key :
SIP1 SRTP Auth-Tag :0
SIP1 Local Domain  :
SIP1 Always FWD    :0
SIP1 Busy FWD      :0
SIP1 No Answer FWD :0
SIP1 Always FWD Num:
SIP1 Busy FWD Num  :
SIP1 NoAnswer FWD N:
SIP1 FWD Timer     :5
SIP1 Ring Type     :0
SIP1 Hotline Num   :
SIP1 Enable Hotline:0
SIP1 WarmLine Time :0
SIP1 Pickup Num    :
SIP1 Join Num      :
SIP1 NAT UDPUpdate :2
SIP1 UDPUpdate TTL :30
SIP1 Server Type   :0
SIP1 User Agent    :
SIP1 PRACK         :1
SIP1 Keep AUTH     :0
SIP1 Session Timer :0
SIP1 S.Timer Expire:0
SIP1 Enable GRUU   :0
SIP1 DTMF Mode     :3
SIP1 DTMF Info Mode:0
SIP1 NAT Type      :0
SIP1 Enable Rport  :1
SIP1 Subscribe     :0
SIP1 Sub Expire    :3600
SIP1 Single Codec  :0
SIP1 CLIR          :0
SIP1 Strict Proxy  :0
SIP1 Direct Contact:0
SIP1 History Info  :0
SIP1 DNS SRV       :0
SIP1 XFER Expire   :0
SIP1 Ban Anonymous :0
SIP1 Dial Off Line :0
SIP1 Quota Name    :0
SIP1 Presence Mode :0
SIP1 RFC Ver       :1
SIP1 Signal Port   :0
SIP1 Transport     :0
SIP1 Enable ChgPort:1
SIP1 TLS Version   :0
SIP1 Use SRV Mixer :0
SIP1 SRV Mixer Uri :
SIP1 Long Contact  :0
SIP1 Auto TCP      :0
SIP1 Uri Escaped   :1
SIP1 Click to Talk :0
SIP1 MWI Num       :
SIP1 CallPark Num  :
SIP1 Retrieve Num  :
SIP1 MSRPHelp Num  :
SIP1 User Is Phone :1
SIP1 Auto Answer   :0
SIP1 NoAnswerTime  :5
SIP1 MissedCallLog :1
SIP1 SvcCode Mode  :0
SIP1 DNDOn SvcCode :
SIP1 DNDOff SvcCode:
SIP1 CFUOn SvcCode :
SIP1 CFUOff SvcCode:
SIP1 CFBOn SvcCode :
SIP1 CFBOff SvcCode:
SIP1 CFNOn SvcCode :
SIP1 CFNOff SvcCode:
SIP1 ANCOn SvcCode :
SIP1 ANCOff SvcCode:
SIP1 Send ANOn Code:
SIP1 Send ANOffCode:
SIP1 CW On Code    :
SIP1 CW Off Code   :
SIP1 VoiceCodecMap :G722,G711U,G711A,G729,G726-32,G723
SIP1 BLFList Uri   :
SIP1 BLF Server    :
SIP1 Respond 182   :0
SIP1 Enable BLFList:0
SIP1 Caller Id Type:4
SIP1 Syn Clock Time:0
SIP1 Use VPN       :1
SIP1 Enable DND    :0
SIP1 Update Reg Exp:1
SIP1 Inactive Hold :0
SIP1 Enable SCA    :0
SIP1 Sub CallPark  :0
SIP1 Hoteling Event:0
SIP1 Sub CC Status :0
SIP1 Feature Sync  :0
SIP1 Req With Port :1


<AUTOUPDATE CONFIG MODULE>
Download Username  :
Download Password  :
FDPS Enable        :1
Config File Name   :
Config File Key    :
Common Cfg File Key:
Download Server IP :<?php echo $server_ip?>
Download Protocol  :2
Download Mode      :2
Download Interval  :1
DHCP Option        :66
PNP Enable         :1
PNP IP             :224.0.1.75
PNP Port           :5060
PNP Transport      :0
PNP Interval       :1
Save Provision Info:0

<PHONE CONFIG MODULE>
--Xml PhoneBook--  :
XML-PBook1 Name    :Directorio
XML-PBook1 Addr    :tftp://<?php echo $server_ip?>/directorio-yealink.xml
Auto Pbook Url     :tftp://<?php echo $server_ip?>/directorio-yealink.xml

<<END OF FILE>>