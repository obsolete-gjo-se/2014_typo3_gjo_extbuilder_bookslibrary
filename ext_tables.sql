#
# Table structure for table 'tx_gjobookslibrary_domain_model_bookplugin'
#
CREATE TABLE tx_gjobookslibrary_domain_model_bookplugin (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	isbn varchar(255) DEFAULT '' NOT NULL,
	cost decimal (11,2) DEFAULT '0' NOT NULL,
	pages int(11) DEFAULT '0' NOT NULL,
  author int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

  sorting int(11) DEFAULT '0' NOT NULL,
	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),

	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_gjobookslibrary_domain_model_authorplugin'
#
CREATE TABLE tx_gjobookslibrary_domain_model_authorplugin (

  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  name varchar(255) DEFAULT '' NOT NULL,
  books int(11) unsigned DEFAULT '0' NOT NULL,

  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
  starttime int(11) unsigned DEFAULT '0' NOT NULL,
  endtime int(11) unsigned DEFAULT '0' NOT NULL,

  sorting int(11) DEFAULT '0' NOT NULL,
  t3_origuid int(11) DEFAULT '0' NOT NULL,
  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  PRIMARY KEY (uid),
  KEY parent (pid),

  KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_gjobookslibrary_domain_model_bookplugin'
#
# CREATE TABLE tx_gjobookslibrary_domain_model_bookplugin (
#
#   author int(11) unsigned DEFAULT '0' NOT NULL,
# );