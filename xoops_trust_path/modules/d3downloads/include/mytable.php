<?php

$GLOBALS['d3download_tables'] = array(
	'broken' => array(
		'reportid' ,
		'lid' ,
		'sender' ,
		'ip' ,
		'status' ,
		'message' ,
		'name' ,
		'email' ,
		'date' ,
	) ,
	'cat' => array(
		'cid' ,
		'pid' ,
		'title' ,
		'imgurl' ,
		'description' ,
		'shotsdir' ,
		'cat_weight' ,
		'submit_message' ,
		'date' ,
		'child' ,
		'path' ,
		'cids_child' ,
	) ,
	'downloads' => array(
		'lid' ,
		'cid' ,
		'title' ,
		'url' ,
		'filename' ,
		'ext' ,
		'file2' ,
		'filename2' ,
		'ext2' ,
		'homepage' ,
		'homepagetitle' ,
		'version' ,
		'size' ,
		'platform' ,
		'license' ,
		'logourl' ,
		'description' ,
		'html' ,
		'smiley' ,
		'br' ,
		'xcode' ,
		'filters' ,
		'extra' ,
		'submitter' ,
		'mail' ,
		'date' ,
		'expired' ,
		'hits' ,
		'rating' ,
		'votes' ,
		'mylink' ,
		'visible' ,
		'cancomment' ,
		'comments' ,
		'kanrisya' ,
	) ,
	'unapproval' => array(
		'requestid' ,
		'lid' ,
		'cid' ,
		'title' ,
		'url' ,
		'filename' ,
		'ext' ,
		'file2' ,
		'filename2' ,
		'ext2' ,
		'homepage' ,
		'homepagetitle' ,
		'version' ,
		'size' ,
		'platform' ,
		'license' ,
		'logourl' ,
		'description' ,
		'html' ,
		'smiley' ,
		'br' ,
		'xcode' ,
		'filters' ,
		'extra' ,
		'submitter' ,
		'mail' ,
		'date' ,
		'expired' ,
		'visible' ,
		'cancomment' ,
		'notify' ,
		'kanrisya' ,
	) ,
	'downloads_history' => array(
		'id' ,
		'lid' ,
		'cid' ,
		'title' ,
		'url' ,
		'filename' ,
		'ext' ,
		'file2' ,
		'filename2' ,
		'ext2' ,
		'version' ,
		'size' ,
		'description' ,
		'extra' ,
		'date' ,
	) ,
	'user_access' => array(
		'cid' ,
		'uid' ,
		'groupid' ,
		'can_read' ,
		'can_post' ,
		'can_edit' ,
		'can_delete' ,
		'post_auto_approved' ,
		'edit_auto_approved' ,
		'html' ,
		'upload' ,
	) ,
	'votedata' => array(
		'ratingid' ,
		'lid' ,
		'ratinguser' ,
		'rating' ,
		'ratinghostname' ,
		'ratingtimestamp' ,
	) ,
	'mylink' => array(
		'uid' ,
		'cids' ,
		'date' ,
	) ,
) ;

?>