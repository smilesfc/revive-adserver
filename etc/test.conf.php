;<?php exit; ?>
;*** DO NOT REMOVE THE LINE ABOVE ***
;------------------------------------------------------------------------------------------;
; Test Environment Settings - Make Sure The Following Are Correct!                         ;
;------------------------------------------------------------------------------------------;

;------------------------------------------------------------------------------------------;
; Database Settings                                                                        ;
;------------------------------------------------------------------------------------------;

[database]
type                                = mysql
host                                = localhost
socket                              =
port                                = 3306
username                            =
password                            =
name                                = oa_simpletest ; Don't set this to be your OpenX
                                                    ; database - the test database is
                                                    ; created/dropped during testing!
persistent                          = false
mysql4_compatibility                = false
protocol                            = tcp

;------------------------------------------------------------------------------------------;
; Do NOT Change Any Of The Following!                                                      ;
;------------------------------------------------------------------------------------------;

;------------------------------------------------------------------------------------------;
; General OpenX Installation Settings                                                      ;
;------------------------------------------------------------------------------------------;

[openads]
installed                           = true
requireSSL                          = false
sslPort                             = 443

[ui]
enabled                             = true
applicationName                     =
headerFilePath                      =
footerFilePath                      =
logoFilePath                        =
headerForegroundColor               =
headerBackgroundColor               =
headerActiveTabColor                =
headerTextColor                     =
gzipCompression                     = true
combineAssets                       = true

;------------------------------------------------------------------------------------------;
; Database Settings                                                                        ;
;------------------------------------------------------------------------------------------;

[databaseCharset]
checkComplete                       = false
clientCharset                       =

[databaseMysql]
statisticsSortBufferSize            =

[databasePgsql]
schema                              =

;------------------------------------------------------------------------------------------;
; Delivery Path and File Name Settings                                                     ;
;------------------------------------------------------------------------------------------;

[webpath]
admin                               =
delivery                            =
deliverySSL                         =
images                              =
imagesSSL                           =

[file]
click                               = ck.php
conversionvars                      = tv.php
content                             = ac.php
conversion                          = ti.php
conversionjs                        = tjs.php
flash                               = fl.js
google                              = ag.php
frame                               = afr.php
image                               = ai.php
js                                  = ajs.php
layer                               = al.php
log                                 = lg.php
popup                               = apu.php
view                                = avw.php
xmlrpc                              = axmlrpc.php
local                               = alocal.php
frontcontroller                     = fc.php
singlepagecall                      = spc.php
spcjs                               = spcjs.php

[store]
mode                                =
webDir                              =
ftpHost                             =
ftpPath                             =
ftpUsername                         =
ftpPassword                         =
ftpPassive                          =

[origin]
type                                = "None"
host                                =
port                                = 80
script                              = /www/delivery/dxmlrpc.php
timeout                             = 10
protocol                            = http

;------------------------------------------------------------------------------------------;
; Delivery Details                                                                         ;
;------------------------------------------------------------------------------------------;

[allowedBanners]
sql                                 = true
web                                 = true
url                                 = true
html                                = true
text                                = true

[allowedTags]
adjs                                = true
adlayer                             = true
adviewnocookies                     = true
local                               = true
popup                               = false
adframe                             = true
adview                              = false
xmlrpc                              = false

[delivery]
cacheExpire                         = 1200
cachePath                           =
acls                                = true
obfuscate                           = false
execPhp                             = false
ctDelimiter                         = __
chDelimiter                         = ","
keywords                            = false
cgiForceStatusHeader                = false ; Set this to true if using a CGI sapi which
                                            ; does not correctly deal with HTTP headers
                                            ; and leaves the description empty
                                            ; (i.e. "HTTP/1.1 302" insead that 302 Found)
clicktracking                       = "No"

[p3p]
policies                            = true
compactPolicy                       = CUR ADM OUR NOR STA NID
policyLocation                      =

;------------------------------------------------------------------------------------------;
; User Interface Settings                                                                  ;
;------------------------------------------------------------------------------------------;

[graphs]
ttfDirectory                        =   ; The directory where True Type Fonts are stored
ttfName                             =   ; Name of the True Type Font to use in graphs, only
                                        ; supported in the test suite at present

;------------------------------------------------------------------------------------------;
; Statistics Logging & Maintenance Details                                                 ;
;------------------------------------------------------------------------------------------;

[logging]
adRequests                          = false
adImpressions                       = true
adClicks                            = true
trackerImpressions                  = true
reverseLookup                       = false
proxyLookup                         = true
sniff                               = false
useragent                           = false
pageInfo                            = false
referer                             = false
defaultImpressionConnectionWindow   =
defaultClickConnectionWindow        =
ignoreHosts                         =         ; Comma separated list of hosts
ignoreUserAgents                    =         ; Pipe separated list of user-agents to ignore
enforceUserAgents                   =         ; Pipe separated list of user-agents to enforce

[maintenance]
autoMaintenance                     = 1
autoMaintenanceDelay                = 5      ; Delay for automaintenance, should be lesser than opearationInterval
timeLimitScripts                    = 300    ; Should maintenance scripts be limited to run no longer than
                                             ; this many seconds? Set to 0 for no time limit

operationInterval                   = 60

blockAdImpressions                  = 0      ; How many seconds must be between impressions and clicks
blockAdClicks                       = 0      ; from the same viewer ID for them to count? Set to 0 seconds
                                             ; for all to count.

compactStats                        = true
compactStatsGrace                   = 604800
pruneCompletedCampaignsSummaryData  = false
channelForecasting                  = true
;channelForecastingDaysBack          = 30     ; How many days from history should be used for forecasting
;channelForecastingDaysAhead         = 7      ; If campaign expire date is empty forecast for this number of days
;channelForecastingMaxDaysAhead      = 30     ; Even if campaign expire date is biger do not forecast more than
;channelForecastingMaxRunTime        = 40     ; Maximum time allowed for channel forecating maintenance (in minutes)

[priority]
instantUpdate                       = true
defaultClickRatio                   = 0.005
defaultConversionRatio              = 0.0001
randmax                             = 2147483647 ; This should be autogenerated in installation process by mt_getrandmax()

[performanceStatistics]
defaultImpressionsThreshold         = 10000    ; Minimum number of impressions needed to calculate performance statistics (eCPM, CR, CTR)
defaultDaysIntervalThreshold        = 30       ; Minimum period of time (in days) needed to calculate performance statistics (eCPM, CR, CTR)

;------------------------------------------------------------------------------------------;
; Table Details                                                                            ;
;------------------------------------------------------------------------------------------;

[table]
prefix              = oa_
type                = INNODB            ; Either MyISAM, or INNODB, for MySQL ONLY

;------------------------------------------------------------------------------------------;
; Table Names                                                                              ;
;------------------------------------------------------------------------------------------;

account_preference_assoc                 = account_preference_assoc
account_user_assoc                       = account_user_assoc
account_user_permission_assoc            = account_user_permission_assoc
accounts                                 = accounts
acls                                     = acls
acls_channel                             = acls_channel
ad_category_assoc                        = ad_category_assoc
ad_zone_assoc                            = ad_zone_assoc
affiliates                               = affiliates
affiliates_extra                         = affiliates_extra
agency                                   = agency
application_variable                     = application_variable
audit                                    = audit
banners                                  = banners
campaigns                                = campaigns
campaigns_trackers                       = campaigns_trackers
category                                 = category
channel                                  = channel
clients                                  = clients
data_intermediate_ad                     = data_intermediate_ad
data_intermediate_ad_connection          = data_intermediate_ad_connection
data_intermediate_ad_variable_value      = data_intermediate_ad_variable_value
data_raw_ad_click                        = data_raw_ad_click
data_raw_ad_impression                   = data_raw_ad_impression
data_raw_ad_request                      = data_raw_ad_request
data_raw_tracker_impression              = data_raw_tracker_impression
data_raw_tracker_variable_value          = data_raw_tracker_variable_value
data_summary_ad_hourly                   = data_summary_ad_hourly
data_summary_ad_zone_assoc               = data_summary_ad_zone_assoc
data_summary_channel_daily               = data_summary_channel_daily
data_summary_zone_impression_history     = data_summary_zone_impression_history
images                                   = images
lb_local                                 = lb_local
log_maintenance_forecasting              = log_maintenance_forecasting
log_maintenance_priority                 = log_maintenance_priority
log_maintenance_statistics               = log_maintenance_statistics
password_recovery                        = password_recovery
placement_zone_assoc                     = placement_zone_assoc
plugins_channel_delivery_assoc           = plugins_channel_delivery_assoc
plugins_channel_delivery_domains         = plugins_channel_delivery_domains
plugins_channel_delivery_rules           = plugins_channel_delivery_rules
preferences                              = preferences
session                                  = session
targetstats                              = targetstats
trackers                                 = trackers
tracker_append                           = tracker_append
userlog                                  = userlog
users                                    = users
variables                                = variables
variable_publisher                       = variable_publisher
zones                                    = zones

;------------------------------------------------------------------------------------------;
; E-mail                                                                                   ;
;------------------------------------------------------------------------------------------;

[email]
logOutgoing                              = true
headers                                  =
qmailPatch                               = false
fromName                                 =
fromAddress                              =
fromCompany                              =

;------------------------------------------------------------------------------------------;
; Debugging/Error Logging Details                                                          ;
;------------------------------------------------------------------------------------------;

[log]
enabled             = true
methodNames         = false
lineNumbers         = false
type                = file
name                = test.log
priority            = PEAR_LOG_DEBUG
ident               = OA
paramsUsername      =
paramsPassword      =
fileMode            = 0644

[deliveryLog]
enabled             = false
name                = delivery.log
fileMode            = 0644

;------------------------------------------------------------------------------------------;
; Non-configurable items for the Delivery Engine                                           ;
;------------------------------------------------------------------------------------------;

[cookie]
permCookieSeconds   = 31536000      ; 1 year in seconds

[debug]
logfile             =                       ; The delivery engine debugging file
production          = false                 ; Is it production server? (do not show backtrace and error sourcecontext)
                                            ; If it is delivery do not show any errors
sendErrorEmails     = false                 ; Send emails containing error reports - do not work in delivery
emailSubject        = Error from OpenX    ; Error report subject
email               = email@example.com     ; Where to send error reports
emailAdminThreshold = PEAR_LOG_ERR          ; Email the error to admin if threshold reached
errorOverride       = true                  ; If true do not show notices
showBacktrace       = false                 ; If true print backtrace

[var]
prefix              = OA_           ; Used to prefix some variables and used in invocation codes
cookieTest          = ct            ; Used for the forced cookie test redirect
cacheBuster         = cb            ; Cache buster
channel             = source        ; Channel of the website
dest                = oadest        ; Used to pass in a URL to redirect to after action
logClick            = log           ; Used to indicate if a click should be logged
n                   = n             ; Used to name a cookie containing displayed banner information
params              = oaparams      ; Used to pass in custom delimited key=value pairs into an ad-call
viewerId            = OAID          ; Used for passing viewer ID cookie value
viewerGeo           = OAGEO         ; Used for storing view geo-location information in a session cookie
campaignId          = campaignid    ; Used for passing campaign ID cookie value
adId                = bannerid      ; Used for passing ad ID cookie value
creativeId          = cid           ; Used for passing creative ID cookie value
zoneId              = zoneid        ; Used for passing zone ID cookie value
blockAd             = OABLOCK       ; Used for passing banner blocking cookie value
capAd               = OACAP         ; Used for passing banner capping cookie value
sessionCapAd        = OASCAP        ; Used for passing session banner capping cookie value
blockCampaign       = OACBLOCK      ; Used for passing campaign blocking cookie value
capCampaign         = OACCAP        ; Used for passing campaign capping cookie value
sessionCapCampaign  = OASCCAP       ; Used for passing session campaign capping cookie value
blockZone           = OAZBLOCK      ; Used for passing zone blocking cookie value
capZone             = OAZCAP        ; Used for passing zone capping cookie value
sessionCapZone      = OASZCAP       ; Used for passing session zone capping cookie value
vars                = OAVARS        ; Used for passing variables
trackonly           = trackonly     ; Used to avoid redirecting after a click
openads             = openads       ; Used as identifier for the adsense click tracking comments


;------------------------------------------------------------------------------------------;
; Load Balancing / Distributed Statistics                                                  ;
;------------------------------------------------------------------------------------------;

[lb]
enabled             = false         ; Should distributed stats be enabled
hasSuper            = false         ; Does the user used to insert the stats into the main
                                    ; database have the SUPER permissions, so the BINLOG
                                    ; can be disabled?
type                = mysql         ; Main database details
host                = localhost
port                = 3306
username            =
password            =
name                =
persistent          = false
compactStats        = true
compactStatsGrace   = 604800

;------------------------------------------------------------------------------------------;
; OpenX Central Settings                                                                   ;
;------------------------------------------------------------------------------------------;

[sync]
checkForUpdates = true

[oacSync]
protocol    = https
host        = sync.openx.org
path        = /xmlrpc.php
httpPort    = 80
httpsPort   = 443

[oacXmlRpc]
protocol    = https
host        = oxc.openx.org
port        = 443
path        = /oxc/xmlrpc
captcha     = /oxc/captcha
signUpUrl   = /oxc/advertiser/signup
publihserUrl= /oxc/advertiser/defzone

[oacDashboard]
protocol    = https
host        = oxc.openx.org
port        = 443
path        = /oxc/dashboard/home
ssoCheck    = /oxc/ssoCheck

[oacSSO]
protocol    = https
host        = login.openx.org
port        = 443
path        = /sso/login
clientPath  = /sso
signup      = /account/signup
forgot      = /account/forgotPassword

;------------------------------------------------------------------------------------------;
; Plugins Settings                                                                         ;
;------------------------------------------------------------------------------------------;

[authentication]
type=internal
deleteUnverifiedUsersAfter = 2419200   ; 28 days (in seconds)

[channelDerivation]
cacheExpire=86400
cachePath=/var/plugins/cache/channelDerivation/
xmlrpcScript=/www/delivery/delivery-xmlrpc.php

[geotargeting]
type="none"
saveStats=false
geoipCountryLocation=
geoipRegionLocation=
geoipCityLocation=
geoipAreaLocation=
geoipDmaLocation=
geoipOrgLocation=
geoipIspLocation=
geoipNetspeedLocation=
showUnavailable=false

;------------------------------------------------------------------------------------------;
; Audit Settings                                                                           ;
;------------------------------------------------------------------------------------------;

[audit]
enabled=0

;------------------------------------------------------------------------------------------;
; Pre-emprive Network Settings                                                             ;
;------------------------------------------------------------------------------------------;

[marketplace]
enabled=1
cacheTime=-1
idHost=id.openx.net
bidHost=bid.openx.net
defaultEnabled=1
defaultCPM=0.5000

;------------------------------------------------------------------------------------------;
; Test configuration
;------------------------------------------------------------------------------------------;

[test]
urlToTracSvnBrowser = https://developer.openx.org/browser/branches/max/trunk/
phpPath = /usr/local/bin/php
;------------------------------------------------------------------------------------------;
