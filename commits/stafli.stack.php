31412913c8669c0298faa05f2b06e3bfb039d52b|Imported upstream stafli/stafli.rdbms.mariadb changes: Fixed collation and character set issues on MariaDB configuration; Added additional arguments and configuration for MariaDB query cache and innodb|Mon, 29 Jan 2018 12:38:04 +0000|Mon, 29 Jan 2018 12:38:04 +0000
f6761330d2ef6e34b50db872d32065dadc7cd9af|Imported upstream stafli/stafli.rdbms.mariadb changes: Refactored and fixed MariaDB configuration; Added arguments and configuration for MariaDB character set, collation and multiple performance vectors|Mon, 29 Jan 2018 02:37:24 +0000|Mon, 29 Jan 2018 02:37:24 +0000
0b6220070720c2637ace7ece19747c10ca993f33|Moved /fpm-status and /fpm-ping urls to /phpfpm-status and /phpfpm-ping addresses; Moved /server-status and /server-info urls to /httpd-status and /httpd-info addresses|Fri, 26 Jan 2018 01:48:20 +0000|Fri, 26 Jan 2018 01:48:20 +0000
e6bf0eed72acb5c19d8124934c726c8d694cc222|Finished importing upstream changes: Fixed instructions in dockerfiles to be fully conditional; Refactored project to be based on stafli/stafli.init.supervisor; Replaced dependency supervisor21 with supervisor31 for CentOS 6 in dockerfile; Refactored packages and extensions installation; Fixed issues on configuration; Added php-fpm test script to dockerfiles; Fixed various logging issues|Fri, 26 Jan 2018 00:13:54 +0000|Fri, 26 Jan 2018 01:40:29 +0000
0d49718209f7dd2cb806f46946e5e692ec555b7d|Improved self documentation in dockerfiles; Added CMD and EXPOSE instructions to dockerfiles|Thu, 25 Jan 2018 23:39:10 +0000|Fri, 26 Jan 2018 00:16:35 +0000
91f3da0322b41b8e6a3979319d3e64bea1a7f03c|Applied argument changes in dockerfiles and docker-compose.yml files from upstream|Thu, 25 Jan 2018 23:28:00 +0000|Fri, 26 Jan 2018 00:16:33 +0000
53c9c5b6617f6db67e6ab33430d28a23bab26992|Refactored labels in docker-compose.yml and added labels to dockerfiles to improve label-schema compliance|Thu, 25 Jan 2018 23:11:05 +0000|Fri, 26 Jan 2018 00:16:22 +0000
76dcde6c6bc9b1e208876ebc055ae7b613c4e3cd|Renamed dockerfiles to match the new namespace|Thu, 25 Jan 2018 22:56:07 +0000|Fri, 26 Jan 2018 00:16:21 +0000
67db0dfc6c26540056d3e809e6ee07f98c8c2ec8|Refactored shell variables usage overall|Thu, 25 Jan 2018 22:50:26 +0000|Thu, 25 Jan 2018 22:50:26 +0000
b94dbce617b458368a7ee881c869c887cf087bc3|Added microbadger badges to README.md|Thu, 25 Jan 2018 22:32:13 +0000|Thu, 25 Jan 2018 22:32:13 +0000
d2205d8455ba6e637762b56a005f934bd279b095|Updated README.md to differentiate stable from old stable builds|Thu, 25 Jan 2018 22:25:18 +0000|Thu, 25 Jan 2018 22:25:18 +0000
48d196f97844040c8d3ee31a579cc38626c481db|Added img-push and img-inspect to Makefile|Thu, 25 Jan 2018 22:02:51 +0000|Thu, 25 Jan 2018 22:02:51 +0000
a1c7d679abb9fab079add3f836abecde5003b2f2|Refactored makefile and variables in main envfile|Thu, 14 Dec 2017 17:19:12 +0000|Thu, 14 Dec 2017 17:19:12 +0000
7be26cea074c754cc400e432c81fa295b8895d6a|Refactored namespaces: Changed repository URLs, image, container and volume names; Fixed typos in project description headers; Replaced some hardcoded strings|Tue, 12 Dec 2017 19:21:18 +0000|Tue, 12 Dec 2017 19:23:04 +0000
1f31a982a5b7e4b8f08ceb822e6fe5a6b42e20a1|Added COMPOSE_PROJECT_NAME variable to add support for project names and prefixes; Added IMAGE_URL_PREFIX variable to replace hardcoded strings|Tue, 12 Dec 2017 19:18:45 +0000|Tue, 12 Dec 2017 19:18:45 +0000
66f1d669dfa0e98e5a8a662d100b5f20dacf1ace|Fixed typos in project description headers|Mon, 11 Dec 2017 12:52:09 +0000|Mon, 11 Dec 2017 12:52:09 +0000
a714e01473b119a8104287c5546be73c1b5a6f57|Refactored project in modularity in mind and with multiple corrections|Sat, 18 Nov 2017 03:01:13 +0000|Sat, 18 Nov 2017 03:01:13 +0000
244f8980ca2b3434025824c779dbee5570ef8ed9|Removed composer hash checking from PHP service to fix composer installation|Sat, 24 Dec 2016 00:15:40 +0000|Sat, 24 Dec 2016 00:15:40 +0000
a86fd1d90a7b26174e12f19e47379ad1086e3756|Updated the README to reflect the introduction of volumes and changes to the Makefile|Tue, 13 Dec 2016 05:45:27 +0000|Tue, 13 Dec 2016 05:46:49 +0000
bc5963e83f123c501201f0cee226ee2519d06048|Refactored make to support volumes, command namespaces and many new commands|Tue, 13 Dec 2016 05:33:28 +0000|Tue, 13 Dec 2016 05:42:59 +0000
64ab8128d20032b2852b3cd61764552ba911e9c8|Added volume support to docker-compose.yml files|Tue, 13 Dec 2016 05:32:43 +0000|Tue, 13 Dec 2016 05:32:49 +0000
46e83a441e09fd59ce2a3dff54909d2aa56572f5|Implemented which in all commands provided by the stack|Mon, 12 Dec 2016 03:47:55 +0000|Mon, 12 Dec 2016 03:47:55 +0000
80fecd2f2e5d78bcaa700efecaa42592b20c96f8|Added tools to PHP|Mon, 12 Dec 2016 03:19:39 +0000|Mon, 12 Dec 2016 03:19:39 +0000
dec775a05e07458f0b7f4b80d7ddf7e4e69ab8c3|Minor fix in some descriptive output|Sun, 11 Dec 2016 22:29:52 +0000|Sun, 11 Dec 2016 22:29:52 +0000
b8bd92069b0e29ab069337d6b0cc0a434cacca96|Fixed session issues in php by replacing php_admin_* with php_* user directives in PHP-FPM pool|Sun, 11 Dec 2016 21:25:04 +0000|Sun, 11 Dec 2016 21:25:04 +0000
c433dc5871fd23c791975abbd1677e66205e8029|Improved daemon and configuration testing|Wed, 19 Oct 2016 14:21:34 +0100|Wed, 19 Oct 2016 15:29:58 +0100
d985a287fe1a23d0f0b09cec8535ef11c3039c3d|Renamed mariadb and redis files to match software versions|Wed, 19 Oct 2016 11:36:48 +0100|Wed, 19 Oct 2016 11:43:12 +0100
21aa5f828db719f1e03df87491ce5110d56135d3|Renamed mysql and redis services and descriptions; Fixed some comments|Wed, 19 Oct 2016 01:51:44 +0100|Wed, 19 Oct 2016 11:43:08 +0100
fb8ec22025d8e858b42f6aa1e037ff38da2223b8|Fixed some headers and comments|Wed, 19 Oct 2016 00:18:33 +0100|Wed, 19 Oct 2016 00:18:33 +0100
3e3f21e1ac9f5443878b91f8baaee5733b0b9b93|Moved labels (non-critical) information back to the env files and implemented label-schema.org RC1|Wed, 19 Oct 2016 00:11:54 +0100|Wed, 19 Oct 2016 00:11:54 +0100
2ab1d501d3c17903a1ff2b3216868ce71ee681ca|Updated README.md to replace information about docker-compose-helper.sh with the Makefile and improve some descriptions and instructions|Tue, 18 Oct 2016 19:03:56 +0100|Tue, 18 Oct 2016 19:03:56 +0100
9eb1199a7eaa1bd49d150769fe7589ddfccead19|Replaced the docker-compose-helper.sh script with a Makefile|Tue, 18 Oct 2016 18:48:44 +0100|Tue, 18 Oct 2016 18:48:44 +0100
8f7ddcb57b96c3c0141f5039c0e8128dfd9c5518|Improve output messages|Fri, 14 Oct 2016 02:31:43 +0100|Fri, 14 Oct 2016 02:31:43 +0100
968a5ecda35db4598154b2f37718cf0c3d88dc02|Likewise with the upstream project, refactored docker-compose.yml and .env files to abandon the bash variable substitution in favor of using the supported docker-compose.override.yml files, which may also use the unsupported .env files; Added sample docker-compose.override.yml files; Updated the readme to reference these changes; Removed unused arguments from docker-compose and dockerfiles|Tue, 11 Oct 2016 20:59:11 +0100|Tue, 11 Oct 2016 20:59:11 +0100
dd4557bb39184167634a6c2bd22038a1e564da78|Replaced DotDeb with the official MariaDB MySQL client for PHP dockerfiles|Tue, 11 Oct 2016 01:52:49 +0100|Tue, 11 Oct 2016 01:52:49 +0100
39b166fabb042d9c3fca749677c3cff1beb01606|Replaced DotDeb and Remi MySQL/MariaDB with the official MariaDB packages and configuration implementation|Tue, 11 Oct 2016 00:06:46 +0100|Tue, 11 Oct 2016 00:24:37 +0100
7b989890c7ffcc187c804cc84d103ebc0fd0f4b2|Improved configuration testing for HTTPd; Implemented configuration testing for PHP-FPM|Mon, 10 Oct 2016 20:07:31 +0100|Mon, 10 Oct 2016 20:07:31 +0100
5bd2e89865d335f7a484793d82538a936198b644|Moved backup for the PHP-FPM pool|Mon, 10 Oct 2016 17:07:34 +0100|Mon, 10 Oct 2016 17:07:34 +0100
babddf9e7b370a33d4c4912216bacd82d24f1f0a|Major refactoring for HTTPd in all distributions: Added missing vhosts for CentOS 6; Added fixes for bad defaults under Debian 7 and 8; Aggregated load module configuration; Aggregated bad defaults configuration with httpd and ssl configuration; Fixed values in various configuration to conformity; Refactored default sites and backups; Improved mod_ssl configuration; Refactored cgi-bin configuration; Refactored main directories configuration; Implemented security configuration; Fixed missing comments in some sections|Sun, 9 Oct 2016 20:36:49 +0100|Mon, 10 Oct 2016 15:20:01 +0100
e8af89299003e211f31431d3dbe6a9e6ec8ff4c1|Synchronized loaded modules and fixed conditional loading for some configurations in HTTPd on CentOS|Fri, 7 Oct 2016 21:20:49 +0100|Fri, 7 Oct 2016 22:12:43 +0100
d2d10a7768c6674b6721b64b8ebbdb37e6499536|Force disable on bad default configuration for httpd.conf and ssl.conf in HTTPd for CentOS 6 and 7|Fri, 7 Oct 2016 18:48:14 +0100|Fri, 7 Oct 2016 21:36:08 +0100
2050088dabbf23f202d8e43527dba198ffd272bb|Added service management to shellfiles|Thu, 6 Oct 2016 17:02:10 +0100|Thu, 6 Oct 2016 17:12:34 +0100
c207d3040a04675cc31a7e328c8d8ce2680b53ae|Improved engine, collation and binding configuration and added logging to MySQL|Tue, 4 Oct 2016 17:40:25 +0100|Wed, 5 Oct 2016 14:59:55 +0100
5be640ee6bf6b5dc1cb3e9bbfb6aca829cec6ebd|Added mkdir for tmp paths in HTTPd and PHP|Tue, 4 Oct 2016 14:45:54 +0100|Wed, 5 Oct 2016 14:59:50 +0100
1171b338c5ded75a6fd7256406cd82d4945dc5c0|Refactored proxy HTTPd configuration: Added missing package dependencies; Implemented envvars changes; Fixed paths; Fixed binding and virtual hosts; Fixed module loading and much more; Improved skeleton configuration|Tue, 4 Oct 2016 03:03:36 +0100|Wed, 5 Oct 2016 14:59:17 +0100
b23c40537b86b279d033a1d759b378dce734008b|Refactored web HTTPd configuration: Added missing package dependencies; Implemented envvars changes; Fixed paths; Fixed binding and virtual hosts; Fixed module loading and much more|Tue, 4 Oct 2016 01:25:56 +0100|Wed, 5 Oct 2016 14:59:17 +0100
1e4ff4a3d4df58fe4a591b550ceabc76c8e30d35|Added additional vhost arguments to web HTTPd; Fixed shell scripts permissions|Tue, 4 Oct 2016 01:08:42 +0100|Wed, 5 Oct 2016 14:59:17 +0100
2d55a168d316e44d8af9efeb5ac304b1c419c85c|Moved original pool configuration in PHP; Forced removal of bad defaults in PHP configuration; Fixed paths misc paths, binding, logging, status and timezone in PHP configuration|Tue, 4 Oct 2016 01:01:35 +0100|Wed, 5 Oct 2016 14:59:08 +0100
6b3900c4e368df24632a00093dee979ce0919d5f|User and binding fixes for MySQL|Tue, 4 Oct 2016 00:41:21 +0100|Tue, 4 Oct 2016 00:41:21 +0100
6249e6bcb950767be5688c9bc1172c93d85705a5|Fixed binding and keepalive configuration in Redis|Tue, 4 Oct 2016 00:29:23 +0100|Tue, 4 Oct 2016 00:29:23 +0100
2c7410fe80561d51a4f8c06c66982435204f4a64|Added proper default/sysconfig file changes for memcached; Improved logging configuration on memcached|Tue, 4 Oct 2016 00:02:11 +0100|Tue, 4 Oct 2016 00:23:48 +0100
5b296d7bf232d9c686b16c77782a89e7eb9b0531|Refactored user and group creation; Fixed users, groups and home paths|Mon, 3 Oct 2016 19:31:27 +0100|Mon, 3 Oct 2016 20:24:52 +0100
c3282fbcc1dc837eebc553982f102987993bf596|Fixed shell for all daemons|Sun, 18 Sep 2016 16:47:13 +0100|Sun, 2 Oct 2016 19:30:59 +0100
de3422ab3a1999b0235abb4d26a207879ec9f686|Uniformized the demo for HTTPd and PHP-FPM|Sun, 18 Sep 2016 16:33:43 +0100|Sun, 18 Sep 2016 16:40:22 +0100
c1b2dadd372e9c645bd7688d7be5618f5e40c5e6|Moved php configuration blocks|Sun, 18 Sep 2016 14:37:55 +0100|Sun, 18 Sep 2016 14:37:55 +0100
3130d14a34af4825ba4e6dcd6a0720de8b61d361|Connected HTTPd Web to PHP in Debian 8 and CentOS 7 (WIP)|Wed, 18 May 2016 00:21:44 +0100|Wed, 18 May 2016 01:33:05 +0100
ad93d7d882116ab66f6c07ef1aec278802edeaaa|Added HTTPd 2.x.x Web/Proxy profiles; Added shellfiles; Updated README|Wed, 27 Apr 2016 17:50:32 +0100|Mon, 2 May 2016 19:13:44 +0100
da7010377a50dd0f0ca8daff94813104129c5e47|Added PHP 5.6.x profile; Added shellfiles; Updated README|Wed, 27 Apr 2016 16:40:08 +0100|Mon, 2 May 2016 19:13:38 +0100
76214f6a4fdc78c92e01e99769bb9e64cec0970d|Added MySQL 5.x.x/MariaDB 10.x profile; Added shellfiles; Updated README|Tue, 19 Apr 2016 19:57:55 +0100|Mon, 2 May 2016 19:13:10 +0100
1c2da6c8009a90e16bb64cb4973fc4f45cf432fd|Added Redis 3.0.x profile; Added shellfiles; Updated README|Tue, 19 Apr 2016 02:15:55 +0100|Mon, 2 May 2016 19:13:10 +0100
9ae5a3eb7819b1ad3a949866f74733f137f2bdcc|Added Memcached 1.4.x profile; Added shellfiles; Updated README|Mon, 18 Apr 2016 18:31:30 +0100|Mon, 2 May 2016 19:13:10 +0100
d21fa40e6efae3cfc8f2614bdfd5da53c172e078|Updated README to include instructions for the repository at GitHub and Docker Hub|Mon, 18 Apr 2016 02:07:59 +0100|Mon, 2 May 2016 19:13:10 +0100
cf1b037d6b3515f356183e66466008b5be7f7fc6|Added docker-compose-helper from solict/general-purpose-system-distro to facilitate operations|Mon, 18 Apr 2016 02:04:23 +0100|Mon, 2 May 2016 19:13:09 +0100
84e4de7502aef87dd11e928f4f979f1ae309fdf1|Updated README to include information about distros and docker-compose|Mon, 18 Apr 2016 02:02:34 +0100|Mon, 2 May 2016 19:13:09 +0100
374aeb0f97a13f52ae8dca8384b43a212cf35816|Added distro skeletons, and their respective docker-compose.yml and .env files|Mon, 18 Apr 2016 01:59:35 +0100|Mon, 2 May 2016 19:13:09 +0100
e45dbaa21e48269fb665d0d4e65916d355079810|Initial commit. Added LICENSE and README|Sat, 16 Apr 2016 19:36:21 +0100|Mon, 2 May 2016 19:13:09 +0100
