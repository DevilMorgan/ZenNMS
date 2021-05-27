<?php

/**
 * AIANA ifType-MIB Definitions
 * Last-Updated 2020-04-02 00:00
 */

return [
	[
		'id' => 1,
		'type' => 'other',
		'description' => 'none of the following',
		'notes' => null,
	],
	[
		'id' => 2,
		'type' => 'regular1822',
		'description' => 'BBN Report 1822',
		'notes' => null,
	],
	[
		'id' => 3,
		'type' => 'hdh1822',
		'description' => 'HDH 1822',
		'notes' => null,
	],
	[
		'id' => 4,
		'type' => 'ddnX25',
		'description' => 'DDN X.25',
		'notes' => null,
	],
	[
		'id' => 5,
		'type' => 'rfc877x25',
		'description' => 'X.25',
		'notes' => null,
	],
	[
		'id' => 6,
		'type' => 'ethernetCsmacd',
		'description' => 'Ethernet CSMA/CD',
		'notes' => 'for all ethernet-like interfaces, regardless of speed, as per RFC3635',
	],
	[
		'id' => 7,
		'type' => 'iso88023Csmacd',
		'description' => null,
		'notes' => 'Deprecated via RFC3635 ethernetCsmacd (6) should be used instead',
	],
	[
		'id' => 8,
		'type' => 'iso88024TokenBus',
		'description' => 'Token Bus-like Objects',
		'notes' => null,
	],
	[
		'id' => 9,
		'type' => 'iso88025TokenRing',
		'description' => 'Token Ring-like Objects',
		'notes' => null,
	],
	[
		'id' => 10,
		'type' => 'iso88026Man',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 11,
		'type' => 'starLan',
		'description' => null,
		'notes' => 'Deprecated via RFC3635 ethernetCsmacd (6) should be used instead',
	],
	[
		'id' => 12,
		'type' => 'proteon10Mbit',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 13,
		'type' => 'proteon80Mbit',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 14,
		'type' => 'hyperchannel',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 15,
		'type' => 'fddi',
		'description' => 'FDDI Objects',
		'notes' => null,
	],
	[
		'id' => 16,
		'type' => 'lapb',
		'description' => 'LAP B',
		'notes' => null,
	],
	[
		'id' => 17,
		'type' => 'sdlc',
		'description' => 'SDLC',
		'notes' => null,
	],
	[
		'id' => 18,
		'type' => 'ds1',
		'description' => 'T1/E1 Carrier Objects',
		'notes' => 'DS1-MIB',
	],
	[
		'id' => 19,
		'type' => 'e1',
		'description' => null,
		'notes' => 'Obsolete see DS1-MIB',
	],
	[
		'id' => 20,
		'type' => 'basicISDN',
		'description' => null,
		'notes' => 'no longer used see also RFC2127',
	],
	[
		'id' => 21,
		'type' => 'primaryISDN',
		'description' => null,
		'notes' => 'no longer used see also RFC2127',
	],
	[
		'id' => 22,
		'type' => 'propPointToPointSerial',
		'description' => 'proprietary serial',
		'notes' => null,
	],
	[
		'id' => 23,
		'type' => 'ppp',
		'description' => 'Point-to-Point Protocol',
		'notes' => null,
	],
	[
		'id' => 24,
		'type' => 'softwareLoopback',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 25,
		'type' => 'eon',
		'description' => 'CLNP over IP ',
		'notes' => null,
	],
	[
		'id' => 26,
		'type' => 'ethernet3Mbit',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 27,
		'type' => 'nsip',
		'description' => 'XNS over IP',
		'notes' => null,
	],
	[
		'id' => 28,
		'type' => 'slip',
		'description' => 'generic SLIP',
		'notes' => null,
	],
	[
		'id' => 29,
		'type' => 'ultra',
		'description' => 'ULTRA technologies',
		'notes' => null,
	],
	[
		'id' => 30,
		'type' => 'ds3',
		'description' => 'DS3/E3 Interface Objects',
		'notes' => 'DS3-MIB',
	],
	[
		'id' => 31,
		'type' => 'sip',
		'description' => 'SMDS Interface Objects',
		'notes' => 'SMDS, coffee',
	],
	[
		'id' => 32,
		'type' => 'frameRelay',
		'description' => 'Frame Relay Objects for DTE',
		'notes' => null,
	],
	[
		'id' => 33,
		'type' => 'rs232',
		'description' => 'RS232',
		'notes' => null,
	],
	[
		'id' => 34,
		'type' => 'parallel',
		'description' => 'Parallel Printer Objects',
		'notes' => null,
	],
	[
		'id' => 35,
		'type' => 'arcnet',
		'description' => 'ARC Network',
		'notes' => null,
	],
	[
		'id' => 36,
		'type' => 'arcnetPlus',
		'description' => 'ARC Network Plus',
		'notes' => null,
	],
	[
		'id' => 37,
		'type' => 'atm',
		'description' => 'ATM cells',
		'notes' => null,
	],
	[
		'id' => 38,
		'type' => 'miox25',
		'description' => 'MIOX25',
		'notes' => null,
	],
	[
		'id' => 39,
		'type' => 'sonet',
		'description' => 'SONET or SDH',
		'notes' => null,
	],
	[
		'id' => 40,
		'type' => 'x25ple',
		'description' => 'X.25 Packet Level',
		'notes' => null,
	],
	[
		'id' => 41,
		'type' => 'iso88022llc',
		'description' => '802.2 LLC',
		'notes' => null,
	],
	[
		'id' => 42,
		'type' => 'localTalk',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 43,
		'type' => 'smdsDxi',
		'description' => 'SMDS DXI',
		'notes' => null,
	],
	[
		'id' => 44,
		'type' => 'frameRelayService',
		'description' => 'Frame Relay DCE',
		'notes' => 'FRNETSERV-MIB',
	],
	[
		'id' => 45,
		'type' => 'v35',
		'description' => 'V.35',
		'notes' => null,
	],
	[
		'id' => 46,
		'type' => 'hssi',
		'description' => 'HSSI',
		'notes' => null,
	],
	[
		'id' => 47,
		'type' => 'hippi',
		'description' => 'HIPPI',
		'notes' => null,
	],
	[
		'id' => 48,
		'type' => 'modem',
		'description' => 'Generic modem',
		'notes' => null,
	],
	[
		'id' => 49,
		'type' => 'aal5',
		'description' => 'AAL5 over ATM',
		'notes' => null,
	],
	[
		'id' => 50,
		'type' => 'sonetPath',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 51,
		'type' => 'sonetVT',
		'description' => null,
		'notes' => null,
	],
	[
		'id' => 52,
		'type' => 'smdsIcip',
		'description' => 'SMDS Inter-Carrier Interface Protocol',
		'notes' => null,
	],
	[
		'id' => 53,
		'type' => 'propVirtual',
		'description' => 'Proprietary virtual/internal interface',
		'notes' => null,
	],
	[
		'id' => 54,
		'type' => 'propMultiplexor',
		'description' => 'Proprietary multi-link Multiplexing',
		'notes' => null,
	],
	[
		'id' => 55,
		'type' => 'ieee80212',
		'description' => '100BaseVG',
		'notes' => null,
	],
	[
		'id' => 56,
		'type' => 'fibreChannel',
		'description' => 'Fibre Channel',
		'notes' => null,
	],
	[
		'id' => 57,
		'type' => 'hippiInterface',
		'description' => 'HIPPI interfaces',
		'notes' => null,
	],
	[
		'id' => 58,
		'type' => 'frameRelayInterconnect',
		'description' => 'Interconnect over Frame Relay',
		'notes' => 'Obsolete, use either frameRelay(32) or frameRelayService(44).',
	],
	[
		'id' => 59,
		'type' => 'aflane8023',
		'description' => 'ATM Emulated LAN for 802.3',
		'notes' => null,
	],
	[
		'id' => 60,
		'type' => 'aflane8025',
		'description' => 'ATM Emulated LAN for 802.5',
		'notes' => null,
	],
	[
		'id' => 61,
		'type' => 'cctEmul',
		'description' => 'ATM Emulated circuit',
		'notes' => null,
	],
	[
		'id' => 62,
		'type' => 'fastEther',
		'description' => 'FastEthernet',
		'notes' => 'Obsoleted via RFC3635 ethernetCsmacd (6) should be used instead',
	],
	[
		'id' => 63,
		'type' => 'isdn',
		'description' => 'ISDN and X.25',
		'notes' => null,
	],
	[
		'id' => 64,
		'type' => 'v11',
		'description' => 'CCITT V.11/X.21',
		'notes' => null,
	],
	[
		'id' => 65,
		'type' => 'v36',
		'description' => 'CCITT V.36',
		'notes' => null,
	],
	[
		'id' => 66,
		'type' => 'g703at64k',
		'description' => 'CCITT G703 at 64Kbps',
		'notes' => null,
	],
	[
		'id' => 67,
		'type' => 'g703at2mb',
		'description' => 'CCITT G703 at 2Mbps',
		'notes' => 'Obsolete see DS1-MIB',
	],
	[
		'id' => 68,
		'type' => 'qllc',
		'description' => 'SNA QLLC',
		'notes' => null,
	],
	[
		'id' => 69,
		'type' => 'fastEtherFX',
		'description' => 'FastEthernetFX',
		'notes' => 'Obsoleted via RFC3635 ethernetCsmacd (6) should be used instead',
	],
	[
		'id' => 70,
		'type' => 'channel',
		'description' => 'channel',
		'notes' => null,
	],
	[
		'id' => 71,
		'type' => 'ieee80211',
		'description' => 'radio spread spectrum',
		'notes' => null,
	],
	[
		'id' => 72,
		'type' => 'ibm370parChan',
		'description' => 'IBM System 360/370 OEMI Channel',
		'notes' => null,
	],
	[
		'id' => 73,
		'type' => 'escon',
		'description' => 'IBM Enterprise Systems Connection',
		'notes' => null,
	],
	[
		'id' => 74,
		'type' => 'dlsw',
		'description' => 'Data Link Switching',
		'notes' => null,
	],
	[
		'id' => 75,
		'type' => 'isdns',
		'description' => 'ISDN S/T interface',
		'notes' => null,
	],
	[
		'id' => 76,
		'type' => 'isdnu',
		'description' => 'ISDN U interface',
		'notes' => null,
	],
	[
		'id' => 77,
		'type' => 'lapd',
		'description' => 'Link Access Protocol D',
		'notes' => null,
	],
	[
		'id' => 78,
		'type' => 'ipSwitch',
		'description' => 'IP Switching Objects',
		'notes' => null,
	],
	[
		'id' => 79,
		'type' => 'rsrb',
		'description' => 'Remote Source Route Bridging',
		'notes' => null,
	],
	[
		'id' => 80,
		'type' => 'atmLogical',
		'description' => 'ATM Logical Port',
		'notes' => null,
	],
	[
		'id' => 81,
		'type' => 'ds0',
		'description' => 'Digital Signal Level 0',
		'notes' => null,
	],
	[
		'id' => 82,
		'type' => 'ds0Bundle',
		'description' => 'group of ds0s on the same ds1',
		'notes' => null,
	],
	[
		'id' => 83,
		'type' => 'bsc',
		'description' => 'Bisynchronous Protocol',
		'notes' => null,
	],
	[
		'id' => 84,
		'type' => 'async',
		'description' => 'Asynchronous Protocol',
		'notes' => null,
	],
	[
		'id' => 85,
		'type' => 'cnr',
		'description' => 'Combat Net Radio',
		'notes' => null,
	],
	[
		'id' => 86,
		'type' => 'iso88025Dtr',
		'description' => 'ISO 802.5r DTR',
		'notes' => null,
	],
	[
		'id' => 87,
		'type' => 'eplrs',
		'description' => 'Enhanced Pos Loc Report Sys',
		'notes' => null,
	],
	[
		'id' => 88,
		'type' => 'arap',
		'description' => 'Appletalk Remote Access Protocol',
		'notes' => null,
	],
	[
		'id' => 89,
		'type' => 'propCnls',
		'description' => 'Proprietary Connectionless Protocol',
		'notes' => null,
	],
	[
		'id' => 90,
		'type' => 'hostPad',
		'description' => 'CCITT-ITU X.29 PAD Protocol',
		'notes' => null,
	],
	[
		'id' => 91,
		'type' => 'termPad',
		'description' => 'CCITT-ITU X.3 PAD Facility',
		'notes' => null,
	],
	[
		'id' => 92,
		'type' => 'frameRelayMPI',
		'description' => 'Multiprotocol Interconnect over FrameRelay',
		'notes' => null,
	],
	[
		'id' => 93,
		'type' => 'x213',
		'description' => 'CCITT-ITU X213',
		'notes' => null,
	],
	[
		'id' => 94,
		'type' => 'adsl',
		'description' => 'Asymmetric Digital Subscriber Loop',
		'notes' => null,
	],
	[
		'id' => 95,
		'type' => 'radsl',
		'description' => 'Rate-Adapt. Digital Subscriber Loop',
		'notes' => null,
	],
	[
		'id' => 96,
		'type' => 'sdsl',
		'description' => 'Symmetric Digital Subscriber Loop',
		'notes' => null,
	],
	[
		'id' => 97,
		'type' => 'vdsl',
		'description' => 'Very H-Speed Digital Subscriber Loop',
		'notes' => null,
	],
	[
		'id' => 98,
		'type' => 'iso88025CRFPInt',
		'description' => 'ISO 802.5 CRFP',
		'notes' => null,
	],
	[
		'id' => 99,
		'type' => 'myrinet',
		'description' => 'Myricom Myrinet',
		'notes' => null,
	],
	[
		'id' => 100,
		'type' => 'voiceEM',
		'description' => 'voice recEive and transMit (E&M)',
		'notes' => null,
	],
	[
		'id' => 101,
		'type' => 'voiceFXO',
		'description' => 'voice Foreign Exchange Office',
		'notes' => null,
	],
	[
		'id' => 102,
		'type' => 'voiceFXS',
		'description' => 'voice Foreign Exchange Station',
		'notes' => null,
	],
	[
		'id' => 103,
		'type' => 'voiceEncap',
		'description' => 'voice encapsulation',
		'notes' => null,
	],
	[
		'id' => 104,
		'type' => 'voiceOverIp',
		'description' => 'voice over IP encapsulation',
		'notes' => null,
	],
	[
		'id' => 105,
		'type' => 'atmDxi',
		'description' => 'ATM DXI',
		'notes' => null,
	],
	[
		'id' => 106,
		'type' => 'atmFuni',
		'description' => 'ATM FUNI',
		'notes' => null,
	],
	[
		'id' => 107,
		'type' => 'atmIma',
		'description' => 'ATM IMA',
		'notes' => null,
	],
	[
		'id' => 108,
		'type' => 'pppMultilinkBundle',
		'description' => 'PPP Multilink Bundle',
		'notes' => null,
	],
	[
		'id' => 109,
		'type' => 'ipOverCdlc',
		'description' => 'IBM ipOverCdlc',
		'notes' => null,
	],
	[
		'id' => 110,
		'type' => 'ipOverClaw',
		'description' => 'IBM Common Link Access to Workstn',
		'notes' => null,
	],
	[
		'id' => 111,
		'type' => 'stackToStack',
		'description' => 'IBM stackToStack',
		'notes' => null,
	],
	[
		'id' => 112,
		'type' => 'virtualIpAddress',
		'description' => 'IBM VIPA',
		'notes' => null,
	],
	[
		'id' => 113,
		'type' => 'mpc',
		'description' => 'IBM multi-protocol channel support',
		'notes' => null,
	],
	[
		'id' => 114,
		'type' => 'ipOverAtm',
		'description' => 'IBM ipOverAtm',
		'notes' => null,
	],
	[
		'id' => 115,
		'type' => 'iso88025Fiber',
		'description' => 'ISO 802.5j Fiber Token Ring',
		'notes' => null,
	],
	[
		'id' => 116,
		'type' => 'tdlc',
		'description' => 'IBM twinaxial data link control',
		'notes' => null,
	],
	[
		'id' => 117,
		'type' => 'gigabitEthernet',
		'description' => 'GigabitEthernet',
		'notes' => 'Obsoleted via RFC3635 ethernetCsmacd (6) should be used instead',
	],
	[
		'id' => 118,
		'type' => 'hdlc',
		'description' => 'HDLC',
		'notes' => null,
	],
	[
		'id' => 119,
		'type' => 'lapf',
		'description' => 'LAP F',
		'notes' => null,
	],
	[
		'id' => 120,
		'type' => 'v37',
		'description' => 'V.37',
		'notes' => null,
	],
	[
		'id' => 121,
		'type' => 'x25mlp',
		'description' => 'Multi-Link Protocol',
		'notes' => null,
	],
	[
		'id' => 122,
		'type' => 'x25huntGroup',
		'description' => 'X25 Hunt Group',
		'notes' => null,
	],
	[
		'id' => 123,
		'type' => 'transpHdlc',
		'description' => 'Transp HDLC',
		'notes' => null,
	],
	[
		'id' => 124,
		'type' => 'interleave',
		'description' => 'Interleave channel',
		'notes' => null,
	],
	[
		'id' => 125,
		'type' => 'fast',
		'description' => 'Fast channel',
		'notes' => null,
	],
	[
		'id' => 126,
		'type' => 'ip',
		'description' => 'IP (for APPN HPR in IP networks)',
		'notes' => null,
	],
	[
		'id' => 127,
		'type' => 'docsCableMaclayer',
		'description' => 'CATV Mac Layer',
		'notes' => null,
	],
	[
		'id' => 128,
		'type' => 'docsCableDownstream',
		'description' => 'CATV Downstream interface',
		'notes' => null,
	],
	[
		'id' => 129,
		'type' => 'docsCableUpstream',
		'description' => 'CATV Upstream interface',
		'notes' => null,
	],
	[
		'id' => 130,
		'type' => 'a12MppSwitch',
		'description' => 'Avalon Parallel Processor',
		'notes' => null,
	],
	[
		'id' => 131,
		'type' => 'tunnel',
		'description' => 'Encapsulation interface',
		'notes' => null,
	],
	[
		'id' => 132,
		'type' => 'coffee',
		'description' => 'coffee pot',
		'notes' => null,
	],
	[
		'id' => 133,
		'type' => 'ces',
		'description' => 'Circuit Emulation Service',
		'notes' => null,
	],
	[
		'id' => 134,
		'type' => 'atmSubInterface',
		'description' => 'ATM Sub Interface',
		'notes' => null,
	],
	[
		'id' => 135,
		'type' => 'l2vlan',
		'description' => 'Layer 2 Virtual LAN using 802.1Q',
		'notes' => null,
	],
	[
		'id' => 136,
		'type' => 'l3ipvlan',
		'description' => 'Layer 3 Virtual LAN using IP',
		'notes' => null,
	],
	[
		'id' => 137,
		'type' => 'l3ipxvlan',
		'description' => 'Layer 3 Virtual LAN using IPX',
		'notes' => null,
	],
	[
		'id' => 138,
		'type' => 'digitalPowerline',
		'description' => 'IP over Power Lines',
		'notes' => null,
	],
	[
		'id' => 139,
		'type' => 'mediaMailOverIp',
		'description' => 'Multimedia Mail over IP',
		'notes' => null,
	],
	[
		'id' => 140,
		'type' => 'dtm',
		'description' => 'Dynamic syncronous Transfer Mode',
		'notes' => null,
	],
	[
		'id' => 141,
		'type' => 'dcn',
		'description' => 'Data Communications Network',
		'notes' => null,
	],
	[
		'id' => 142,
		'type' => 'ipForward',
		'description' => 'IP Forwarding Interface',
		'notes' => null,
	],
	[
		'id' => 143,
		'type' => 'msdsl',
		'description' => 'Multi-rate Symmetric DSL',
		'notes' => null,
	],
	[
		'id' => 144,
		'type' => 'ieee1394',
		'description' => 'IEEE1394 High Performance Serial Bus',
		'notes' => null,
	],
	[
		'id' => 145,
		'type' => 'if-gsn',
		'description' => 'HIPPI-6400',
		'notes' => null,
	],
	[
		'id' => 146,
		'type' => 'dvbRccMacLayer',
		'description' => 'DVB-RCC MAC Layer',
		'notes' => null,
	],
	[
		'id' => 147,
		'type' => 'dvbRccDownstream',
		'description' => 'DVB-RCC Downstream Channel',
		'notes' => null,
	],
	[
		'id' => 148,
		'type' => 'dvbRccUpstream',
		'description' => 'DVB-RCC Upstream Channel',
		'notes' => null,
	],
	[
		'id' => 149,
		'type' => 'atmVirtual',
		'description' => 'ATM Virtual Interface',
		'notes' => null,
	],
	[
		'id' => 150,
		'type' => 'mplsTunnel',
		'description' => 'MPLS Tunnel Virtual Interface',
		'notes' => null,
	],
	[
		'id' => 151,
		'type' => 'srp',
		'description' => 'Spatial Reuse Protocol',
		'notes' => null,
	],
	[
		'id' => 152,
		'type' => 'voiceOverAtm',
		'description' => 'Voice Over ATM',
		'notes' => null,
	],
	[
		'id' => 153,
		'type' => 'voiceOverFrameRelay',
		'description' => 'Voice Over Frame Relay',
		'notes' => null,
	],
	[
		'id' => 154,
		'type' => 'idsl',
		'description' => 'Digital Subscriber Loop over ISDN',
		'notes' => null,
	],
	[
		'id' => 155,
		'type' => 'compositeLink',
		'description' => 'Avici Composite Link Interface',
		'notes' => null,
	],
	[
		'id' => 156,
		'type' => 'ss7SigLink',
		'description' => 'SS7 Signaling Link',
		'notes' => null,
	],
	[
		'id' => 157,
		'type' => 'propWirelessP2P',
		'description' => 'Propietary P2P wireless interface',
		'notes' => null,
	],
	[
		'id' => 158,
		'type' => 'frForward',
		'description' => 'Frame Forward Interface',
		'notes' => null,
	],
	[
		'id' => 159,
		'type' => 'rfc1483',
		'description' => 'Multiprotocol over ATM AAL5',
		'notes' => null,
	],
	[
		'id' => 160,
		'type' => 'usb',
		'description' => 'USB Interface',
		'notes' => null,
	],
	[
		'id' => 161,
		'type' => 'ieee8023adLag',
		'description' => 'IEEE 802.3ad Link Aggregate',
		'notes' => null,
	],
	[
		'id' => 162,
		'type' => 'bgppolicyaccounting',
		'description' => 'BGP Policy Accounting',
		'notes' => null,
	],
	[
		'id' => 163,
		'type' => 'frf16MfrBundle',
		'description' => 'FRF .16 Multilink Frame Relay ',
		'notes' => null,
	],
	[
		'id' => 164,
		'type' => 'h323Gatekeeper',
		'description' => 'H323 Gatekeeper',
		'notes' => null,
	],
	[
		'id' => 165,
		'type' => 'h323Proxy',
		'description' => 'H323 Voice and Video Proxy',
		'notes' => null,
	],
	[
		'id' => 166,
		'type' => 'mpls',
		'description' => 'MPLS',
		'notes' => null,
	],
	[
		'id' => 167,
		'type' => 'mfSigLink',
		'description' => 'Multi-frequency signaling link',
		'notes' => null,
	],
	[
		'id' => 168,
		'type' => 'hdsl2',
		'description' => 'High Bit-Rate DSL - 2nd generation',
		'notes' => null,
	],
	[
		'id' => 169,
		'type' => 'shdsl',
		'description' => 'Multirate HDSL2',
		'notes' => null,
	],
	[
		'id' => 170,
		'type' => 'ds1FDL',
		'description' => 'Facility Data Link 4Kbps on a DS1',
		'notes' => null,
	],
	[
		'id' => 171,
		'type' => 'pos',
		'description' => 'Packet over SONET/SDH Interface',
		'notes' => null,
	],
	[
		'id' => 172,
		'type' => 'dvbAsiIn',
		'description' => 'DVB-ASI Input',
		'notes' => null,
	],
	[
		'id' => 173,
		'type' => 'dvbAsiOut',
		'description' => 'DVB-ASI Output',
		'notes' => null,
	],
	[
		'id' => 174,
		'type' => 'plc',
		'description' => 'Power Line Communtications',
		'notes' => null,
	],
	[
		'id' => 175,
		'type' => 'nfas',
		'description' => 'Non Facility Associated Signaling',
		'notes' => null,
	],
	[
		'id' => 176,
		'type' => 'tr008',
		'description' => 'TR008',
		'notes' => null,
	],
	[
		'id' => 177,
		'type' => 'gr303RDT',
		'description' => 'Remote Digital Terminal',
		'notes' => null,
	],
	[
		'id' => 178,
		'type' => 'gr303IDT',
		'description' => 'Integrated Digital Terminal',
		'notes' => null,
	],
	[
		'id' => 179,
		'type' => 'isup',
		'description' => 'ISUP',
		'notes' => null,
	],
	[
		'id' => 180,
		'type' => 'propDocsWirelessMaclayer',
		'description' => 'Cisco proprietary Maclayer',
		'notes' => null,
	],
	[
		'id' => 181,
		'type' => 'propDocsWirelessDownstream',
		'description' => 'Cisco proprietary Downstream',
		'notes' => null,
	],
	[
		'id' => 182,
		'type' => 'propDocsWirelessUpstream',
		'description' => 'Cisco proprietary Upstream',
		'notes' => null,
	],
	[
		'id' => 183,
		'type' => 'hiperlan2',
		'description' => 'HIPERLAN Type 2 Radio Interface',
		'notes' => null,
	],
	[
		'id' => 184,
		'type' => 'propBWAp2Mp',
		'description' => 'PropBroadbandWirelessAccesspt2multipt',
		'notes' => 'use of this iftype for IEEE 802.16 WMAN interfaces as per IEEE Std 802.16f is deprecated and ifType 237 should be used instead.',
	],
	[
		'id' => 185,
		'type' => 'sonetOverheadChannel',
		'description' => 'SONET Overhead Channel',
		'notes' => null,
	],
	[
		'id' => 186,
		'type' => 'digitalWrapperOverheadChannel',
		'description' => 'Digital Wrapper Overhead Channel',
		'notes' => null,
	],
	[
		'id' => 187,
		'type' => 'aal2',
		'description' => 'ATM adaptation layer 2',
		'notes' => null,
	],
	[
		'id' => 188,
		'type' => 'radioMAC',
		'description' => 'MAC layer over radio links',
		'notes' => null,
	],
	[
		'id' => 189,
		'type' => 'atmRadio',
		'description' => 'ATM over radio links',
		'notes' => null,
	],
	[
		'id' => 190,
		'type' => 'imt',
		'description' => 'Inter Machine Trunks',
		'notes' => null,
	],
	[
		'id' => 191,
		'type' => 'mvl',
		'description' => 'Multiple Virtual Lines DSL',
		'notes' => null,
	],
	[
		'id' => 192,
		'type' => 'reachDSL',
		'description' => 'Long Reach DSL',
		'notes' => null,
	],
	[
		'id' => 193,
		'type' => 'frDlciEndPt',
		'description' => 'Frame Relay DLCI End Point',
		'notes' => null,
	],
	[
		'id' => 194,
		'type' => 'atmVciEndPt',
		'description' => 'ATM VCI End Point',
		'notes' => null,
	],
	[
		'id' => 195,
		'type' => 'opticalChannel',
		'description' => 'Optical Channel',
		'notes' => null,
	],
	[
		'id' => 196,
		'type' => 'opticalTransport',
		'description' => 'Optical Transport',
		'notes' => null,
	],
	[
		'id' => 197,
		'type' => 'propAtm',
		'description' => 'Proprietary ATM',
		'notes' => null,
	],
	[
		'id' => 198,
		'type' => 'voiceOverCable',
		'description' => 'Voice Over Cable Interface',
		'notes' => null,
	],
	[
		'id' => 199,
		'type' => 'infiniband',
		'description' => 'Infiniband',
		'notes' => null,
	],
	[
		'id' => 200,
		'type' => 'teLink',
		'description' => 'TE Link',
		'notes' => null,
	],
	[
		'id' => 201,
		'type' => 'q2931',
		'description' => 'Q.2931',
		'notes' => null,
	],
	[
		'id' => 202,
		'type' => 'virtualTg',
		'description' => 'Virtual Trunk Group',
		'notes' => null,
	],
	[
		'id' => 203,
		'type' => 'sipTg',
		'description' => 'SIP Trunk Group',
		'notes' => null,
	],
	[
		'id' => 204,
		'type' => 'sipSig',
		'description' => 'SIP Signaling',
		'notes' => null,
	],
	[
		'id' => 205,
		'type' => 'docsCableUpstreamChannel',
		'description' => 'CATV Upstream Channel',
		'notes' => null,
	],
	[
		'id' => 206,
		'type' => 'econet',
		'description' => 'Acorn Econet',
		'notes' => null,
	],
	[
		'id' => 207,
		'type' => 'pon155',
		'description' => 'FSAN 155Mb Symetrical PON interface',
		'notes' => null,
	],
	[
		'id' => 208,
		'type' => 'pon622',
		'description' => 'FSAN622Mb Symetrical PON interface',
		'notes' => null,
	],
	[
		'id' => 209,
		'type' => 'bridge',
		'description' => 'Transparent bridge interface',
		'notes' => null,
	],
	[
		'id' => 210,
		'type' => 'linegroup',
		'description' => 'Interface common to multiple lines',
		'notes' => null,
	],
	[
		'id' => 211,
		'type' => 'voiceEMFGD',
		'description' => 'voice E&M Feature Group D',
		'notes' => null,
	],
	[
		'id' => 212,
		'type' => 'voiceFGDEANA',
		'description' => 'voice FGD Exchange Access North American',
		'notes' => null,
	],
	[
		'id' => 213,
		'type' => 'voiceDID',
		'description' => 'voice Direct Inward Dialing',
		'notes' => null,
	],
	[
		'id' => 214,
		'type' => 'mpegTransport',
		'description' => 'MPEG transport interface',
		'notes' => null,
	],
	[
		'id' => 215,
		'type' => 'sixToFour',
		'description' => '6to4 interface',
		'notes' => 'DEPRECATED',
	],
	[
		'id' => 216,
		'type' => 'gtp',
		'description' => 'GTP (GPRS Tunneling Protocol)',
		'notes' => null,
	],
	[
		'id' => 217,
		'type' => 'pdnEtherLoop1',
		'description' => 'Paradyne EtherLoop 1',
		'notes' => null,
	],
	[
		'id' => 218,
		'type' => 'pdnEtherLoop2',
		'description' => 'Paradyne EtherLoop 2',
		'notes' => null,
	],
	[
		'id' => 219,
		'type' => 'opticalChannelGroup',
		'description' => 'Optical Channel Group',
		'notes' => null,
	],
	[
		'id' => 220,
		'type' => 'homepna',
		'description' => 'HomePNA ITU-T G.989',
		'notes' => null,
	],
	[
		'id' => 221,
		'type' => 'gfp',
		'description' => 'Generic Framing Procedure (GFP)',
		'notes' => null,
	],
	[
		'id' => 222,
		'type' => 'ciscoISLvlan',
		'description' => 'Layer 2 Virtual LAN using Cisco ISL',
		'notes' => null,
	],
	[
		'id' => 223,
		'type' => 'actelisMetaLOOP',
		'description' => 'Acteleis proprietary MetaLOOP High Speed Link',
		'notes' => null,
	],
	[
		'id' => 224,
		'type' => 'fcipLink',
		'description' => 'FCIP Link',
		'notes' => null,
	],
	[
		'id' => 225,
		'type' => 'rpr',
		'description' => 'Resilient Packet Ring Interface Type',
		'notes' => null,
	],
	[
		'id' => 226,
		'type' => 'qam',
		'description' => 'RF Qam Interface',
		'notes' => null,
	],
	[
		'id' => 227,
		'type' => 'lmp',
		'description' => 'Link Management Protocol',
		'notes' => null,
	],
	[
		'id' => 228,
		'type' => 'cblVectaStar',
		'description' => 'Cambridge Broadband Networks Limited VectaStar',
		'notes' => null,
	],
	[
		'id' => 229,
		'type' => 'docsCableMCmtsDownstream',
		'description' => 'CATV Modular CMTS Downstream Interface',
		'notes' => null,
	],
	[
		'id' => 230,
		'type' => 'adsl2',
		'description' => 'Asymmetric Digital Subscriber Loop Version 2',
		'notes' => 'DEPRECATED/OBSOLETED - please use adsl2plus 238 instead',
	],
	[
		'id' => 231,
		'type' => 'macSecControlledIF',
		'description' => 'MACSecControlled',
		'notes' => null,
	],
	[
		'id' => 232,
		'type' => 'macSecUncontrolledIF',
		'description' => 'MACSecUncontrolled',
		'notes' => null,
	],
	[
		'id' => 233,
		'type' => 'aviciOpticalEther',
		'description' => 'Avici Optical Ethernet Aggregate',
		'notes' => null,
	],
	[
		'id' => 234,
		'type' => 'atmbond',
		'description' => 'atmbond',
		'notes' => null,
	],
	[
		'id' => 235,
		'type' => 'voiceFGDOS',
		'description' => 'voice FGD Operator Services',
		'notes' => null,
	],
	[
		'id' => 236,
		'type' => 'mocaVersion1',
		'description' => 'MultiMedia over Coax Alliance (MoCA) Interface',
		'notes' => 'as documented in information provided privately to IANA',
	],
	[
		'id' => 237,
		'type' => 'ieee80216WMAN',
		'description' => 'IEEE 802.16 WMAN interface',
		'notes' => null,
	],
	[
		'id' => 238,
		'type' => 'adsl2plus',
		'description' => 'Asymmetric Digital Subscriber Loop Version 2, Version 2 Plus and all variants',
		'notes' => null,
	],
	[
		'id' => 239,
		'type' => 'dvbRcsMacLayer',
		'description' => 'DVB-RCS MAC Layer',
		'notes' => null,
	],
	[
		'id' => 240,
		'type' => 'dvbTdm',
		'description' => 'DVB Satellite TDM',
		'notes' => null,
	],
	[
		'id' => 241,
		'type' => 'dvbRcsTdma',
		'description' => 'DVB-RCS TDMA',
		'notes' => null,
	],
	[
		'id' => 242,
		'type' => 'x86Laps',
		'description' => 'LAPS based on ITU-T X.86/Y.1323',
		'notes' => null,
	],
	[
		'id' => 243,
		'type' => 'wwanPP',
		'description' => '3GPP WWAN',
		'notes' => null,
	],
	[
		'id' => 244,
		'type' => 'wwanPP2',
		'description' => '3GPP2 WWAN',
		'notes' => null,
	],
	[
		'id' => 245,
		'type' => 'voiceEBS',
		'description' => 'voice P-phone EBS physical interface',
		'notes' => null,
	],
	[
		'id' => 246,
		'type' => 'ifPwType',
		'description' => 'Pseudowire interface type',
		'notes' => null,
	],
	[
		'id' => 247,
		'type' => 'ilan',
		'description' => 'Internal LAN on a bridge per IEEE 802.1ap',
		'notes' => null,
	],
	[
		'id' => 248,
		'type' => 'pip',
		'description' => 'Provider Instance Port on a bridge per IEEE 802.1ah PBB',
		'notes' => null,
	],
	[
		'id' => 249,
		'type' => 'aluELP',
		'description' => 'Alcatel-Lucent Ethernet Link Protection',
		'notes' => null,
	],
	[
		'id' => 250,
		'type' => 'gpon',
		'description' => 'Gigabit-capable passive optical networks (G-PON)',
		'notes' => 'as per ITU-T G.948',
	],
	[
		'id' => 251,
		'type' => 'vdsl2',
		'description' => 'Very high speed digital subscriber line Version 2',
		'notes' => 'as per ITU-T Recommendation G.993.2',
	],
	[
		'id' => 252,
		'type' => 'capwapDot11Profile',
		'description' => ' WLAN Profile Interface',
		'notes' => null,
	],
	[
		'id' => 253,
		'type' => 'capwapDot11Bss',
		'description' => 'WLAN BSS Interface',
		'notes' => null,
	],
	[
		'id' => 254,
		'type' => 'capwapWtpVirtualRadio',
		'description' => 'WTP Virtual Radio Interface',
		'notes' => null,
	],
	[
		'id' => 255,
		'type' => 'bits',
		'description' => 'bitsport',
		'notes' => null,
	],
	[
		'id' => 256,
		'type' => 'docsCableUpstreamRfPort',
		'description' => 'DOCSIS CATV Upstream RF Port',
		'notes' => null,
	],
	[
		'id' => 257,
		'type' => 'cableDownstreamRfPort',
		'description' => 'CATV downstream RF port',
		'notes' => null,
	],
	[
		'id' => 258,
		'type' => 'vmwareVirtualNic',
		'description' => 'VMware Virtual Network Interface',
		'notes' => null,
	],
	[
		'id' => 259,
		'type' => 'ieee802154',
		'description' => 'IEEE 802.15.4 WPAN interface',
		'notes' => null,
	],
	[
		'id' => 260,
		'type' => 'otnOdu',
		'description' => 'OTN Optical Data Unit',
		'notes' => null,
	],
	[
		'id' => 261,
		'type' => 'otnOtu',
		'description' => 'OTN Optical channel Transport Unit',
		'notes' => null,
	],
	[
		'id' => 262,
		'type' => 'ifVfiType',
		'description' => 'VPLS Forwarding Instance Interface Type',
		'notes' => null,
	],
	[
		'id' => 263,
		'type' => 'g9981',
		'description' => 'G.998.1 bonded interface',
		'notes' => null,
	],
	[
		'id' => 264,
		'type' => 'g9982',
		'description' => 'G.998.2 bonded interface',
		'notes' => null,
	],
	[
		'id' => 265,
		'type' => 'g9983',
		'description' => 'G.998.3 bonded interface',
		'notes' => null,
	],
	[
		'id' => 266,
		'type' => 'aluEpon',
		'description' => 'Ethernet Passive Optical Networks (E-PON)',
		'notes' => null,
	],
	[
		'id' => 267,
		'type' => 'aluEponOnu',
		'description' => 'EPON Optical Network Unit',
		'notes' => null,
	],
	[
		'id' => 268,
		'type' => 'aluEponPhysicalUni',
		'description' => 'EPON physical User to Network interface',
		'notes' => null,
	],
	[
		'id' => 269,
		'type' => 'aluEponLogicalLink',
		'description' => 'The emulation of a point-to-point link over the EPON layer',
		'notes' => null,
	],
	[
		'id' => 270,
		'type' => 'aluGponOnu',
		'description' => 'GPON Optical Network Unit',
		'notes' => null,
	],
	[
		'id' => 271,
		'type' => 'aluGponPhysicalUni',
		'description' => 'GPON physical User to Network interface',
		'notes' => null,
	],
	[
		'id' => 272,
		'type' => 'vmwareNicTeam',
		'description' => 'VMware NIC Team',
		'notes' => null,
	],
	[
		'id' => 277,
		'type' => 'docsOfdmDownstream',
		'description' => 'CATV Downstream OFDM interface',
		'notes' => null,
	],
	[
		'id' => 278,
		'type' => 'docsOfdmaUpstream',
		'description' => 'CATV Upstream OFDMA interface',
		'notes' => null,
	],
	[
		'id' => 279,
		'type' => 'gfast',
		'description' => 'G.fast port',
		'notes' => null,
	],
	[
		'id' => 280,
		'type' => 'sdci',
		'description' => 'SDCI (IO-Link)',
		'notes' => null,
	],
	[
		'id' => 281,
		'type' => 'xboxWireless',
		'description' => 'Xbox wireless',
		'notes' => null,
	],
	[
		'id' => 282,
		'type' => 'fastdsl',
		'description' => 'Fast Digital Subscriber Loop (FastDSL)',
		'notes' => null,
	],
	[
		'id' => 283,
		'type' => 'docsCableScte55d1FwdOob',
		'description' => 'Cable SCTE 55-1 OOB Forward Channel',
		'notes' => null,
	],
	[
		'id' => 284,
		'type' => 'docsCableScte55d1RetOob',
		'description' => 'Cable SCTE 55-1 OOB Return Channel',
		'notes' => null,
	],
	[
		'id' => 285,
		'type' => 'docsCableScte55d2DsOob',
		'description' => 'Cable SCTE 55-2 OOB Downstream Channel',
		'notes' => null,
	],
	[
		'id' => 286,
		'type' => 'docsCableScte55d2UsOob',
		'description' => 'Cable SCTE 55-2 OOB Upstream Channel',
		'notes' => null,
	],
	[
		'id' => 287,
		'type' => 'docsCableNdf',
		'description' => 'Cable Narrowband Digital Forward',
		'notes' => null,
	],
	[
		'id' => 288,
		'type' => 'docsCableNdr',
		'description' => 'Cable Narrowband Digital Return',
		'notes' => null,
	],
	[
		'id' => 289,
		'type' => 'ptm',
		'description' => 'Packet Transfer Mode',
		'notes' => null,
	],
	[
		'id' => 290,
		'type' => 'ghn',
		'description' => 'G.hn port',
		'notes' => null,
	],
	[
		'id' => 291,
		'type' => 'otnOtsi',
		'description' => 'Optical Tributary Signal',
		'notes' => null,
	],
	[
		'id' => 292,
		'type' => 'otnOtuc',
		'description' => 'OTN OTUCn',
		'notes' => null,
	],
	[
		'id' => 293,
		'type' => 'otnOduc',
		'description' => 'OTN ODUC',
		'notes' => null,
	],
	[
		'id' => 294,
		'type' => 'otnOtsig',
		'description' => 'OTN OTUC Signal',
		'notes' => null,
	],
	[
		'id' => 295,
		'type' => 'microwaveCarrierTermination',
		'description' => 'air interface of a single microwave carrier',
		'notes' => null,
	],
	[
		'id' => 296,
		'type' => 'microwaveRadioLinkTerminal',
		'description' => 'radio link interface for one or several aggregated microwave carriers',
		'notes' => null,
	],
	[
		'id' => 297,
		'type' => 'ieee8021axDrni',
		'description' => 'IEEE 802.1AX Distributed Resilient Network Interface',
		'notes' => null,
	],
	[
		'id' => 298,
		'type' => 'ax25',
		'description' => 'AX.25 network interfaces',
		'notes' => null,
	],
	[
		'id' => 299,
		'type' => 'ieee19061nanocom',
		'description' => 'Nanoscale and Molecular Communication',
		'notes' => null,
	],
];