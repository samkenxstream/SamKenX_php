<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace GPBMetadata\Google\Cloud\Filestore\V1;

class CloudFilestoreService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Common\OperationMetadata::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�6
7google/cloud/filestore/v1/cloud_filestore_service.protogoogle.cloud.filestore.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/common/operation_metadata.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
NetworkConfig
network (	C
modes (24.google.cloud.filestore.v1.NetworkConfig.AddressMode
reserved_ip_range (	
ip_addresses (	B�A":
AddressMode
ADDRESS_MODE_UNSPECIFIED 
	MODE_IPV4"�
FileShareConfig
name (	
capacity_gb (8
source_backup (	B�A
file.googleapis.com/BackupH G
nfs_export_options (2+.google.cloud.filestore.v1.NfsExportOptionsB
source"�
NfsExportOptions
	ip_ranges (	K
access_mode (26.google.cloud.filestore.v1.NfsExportOptions.AccessModeK
squash_mode (26.google.cloud.filestore.v1.NfsExportOptions.SquashMode
anon_uid (
anon_gid ("H

AccessMode
ACCESS_MODE_UNSPECIFIED 
	READ_ONLY

READ_WRITE"N

SquashMode
SQUASH_MODE_UNSPECIFIED 
NO_ROOT_SQUASH
ROOT_SQUASH"�
Instance
name (	B�A
description (	=
state (2).google.cloud.filestore.v1.Instance.StateB�A
status_message (	B�A4
create_time (2.google.protobuf.TimestampB�A6
tier (2(.google.cloud.filestore.v1.Instance.Tier?
labels	 (2/.google.cloud.filestore.v1.Instance.LabelsEntry?
file_shares
 (2*.google.cloud.filestore.v1.FileShareConfig:
networks (2(.google.cloud.filestore.v1.NetworkConfig
etag (	6
satisfies_pzs (2.google.protobuf.BoolValueB�A-
LabelsEntry
key (	
value (	:8"n
State
STATE_UNSPECIFIED 
CREATING	
READY
	REPAIRING
DELETING	
ERROR
	RESTORING"i
Tier
TIER_UNSPECIFIED 
STANDARD
PREMIUM
	BASIC_HDD
	BASIC_SSD
HIGH_SCALE_SSD:_�A\\
file.googleapis.com/Instance<projects/{project}/locations/{location}/instances/{instance}"�
CreateInstanceRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
instance_id (	B�A:
instance (2#.google.cloud.filestore.v1.InstanceB�A"H
GetInstanceRequest2
name (	B$�A�A
file.googleapis.com/Instance"
UpdateInstanceRequest/
update_mask (2.google.protobuf.FieldMask5
instance (2#.google.cloud.filestore.v1.Instance"�
RestoreInstanceRequest2
name (	B$�A�A
file.googleapis.com/Instance

file_share (	B�A8
source_backup (	B�A
file.googleapis.com/BackupH B
source"K
DeleteInstanceRequest2
name (	B$�A�A
file.googleapis.com/Instance"�
ListInstancesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
order_by (	
filter (	"}
ListInstancesResponse6
	instances (2#.google.cloud.filestore.v1.Instance
next_page_token (	
unreachable (	"�
Backup
name (	B�A
description (	;
state (2\'.google.cloud.filestore.v1.Backup.StateB�A4
create_time (2.google.protobuf.TimestampB�A=
labels (2-.google.cloud.filestore.v1.Backup.LabelsEntry
capacity_gb (B�A
storage_bytes (B�A:
source_instance (	B!�A
file.googleapis.com/Instance
source_file_share	 (	K
source_instance_tier
 (2(.google.cloud.filestore.v1.Instance.TierB�A
download_bytes (B�A6
satisfies_pzs (2.google.protobuf.BoolValueB�A-
LabelsEntry
key (	
value (	:8"U
State
STATE_UNSPECIFIED 
CREATING

FINALIZING	
READY
DELETING:Y�AV
file.googleapis.com/Backup8projects/{project}/locations/{location}/backups/{backup}"�
CreateBackupRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location6
backup (2!.google.cloud.filestore.v1.BackupB�A
	backup_id (	B�A"G
DeleteBackupRequest0
name (	B"�A�A
file.googleapis.com/Backup"�
UpdateBackupRequest6
backup (2!.google.cloud.filestore.v1.BackupB�A4
update_mask (2.google.protobuf.FieldMaskB�A"D
GetBackupRequest0
name (	B"�A�A
file.googleapis.com/Backup"�
ListBackupsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
order_by (	
filter (	"w
ListBackupsResponse2
backups (2!.google.cloud.filestore.v1.Backup
next_page_token (	
unreachable (	2�
CloudFilestoreManager�
ListInstances/.google.cloud.filestore.v1.ListInstancesRequest0.google.cloud.filestore.v1.ListInstancesResponse">���/-/v1/{parent=projects/*/locations/*}/instances�Aparent�
GetInstance-.google.cloud.filestore.v1.GetInstanceRequest#.google.cloud.filestore.v1.Instance"<���/-/v1/{name=projects/*/locations/*/instances/*}�Aname�
CreateInstance0.google.cloud.filestore.v1.CreateInstanceRequest.google.longrunning.Operation"����9"-/v1/{parent=projects/*/locations/*}/instances:instance�Aparent,instance,instance_id�A1
Instance%google.cloud.common.OperationMetadata�
UpdateInstance0.google.cloud.filestore.v1.UpdateInstanceRequest.google.longrunning.Operation"����B26/v1/{instance.name=projects/*/locations/*/instances/*}:instance�Ainstance,update_mask�A1
Instance%google.cloud.common.OperationMetadata�
RestoreInstance1.google.cloud.filestore.v1.RestoreInstanceRequest.google.longrunning.Operation"t���:"5/v1/{name=projects/*/locations/*/instances/*}:restore:*�A1
Instance%google.cloud.common.OperationMetadata�
DeleteInstance0.google.cloud.filestore.v1.DeleteInstanceRequest.google.longrunning.Operation"}���/*-/v1/{name=projects/*/locations/*/instances/*}�Aname�A>
google.protobuf.Empty%google.cloud.common.OperationMetadata�
ListBackups-.google.cloud.filestore.v1.ListBackupsRequest..google.cloud.filestore.v1.ListBackupsResponse"<���-+/v1/{parent=projects/*/locations/*}/backups�Aparent�
	GetBackup+.google.cloud.filestore.v1.GetBackupRequest!.google.cloud.filestore.v1.Backup":���-+/v1/{name=projects/*/locations/*/backups/*}�Aname�
CreateBackup..google.cloud.filestore.v1.CreateBackupRequest.google.longrunning.Operation"����5"+/v1/{parent=projects/*/locations/*}/backups:backup�Aparent,backup,backup_id�A/
Backup%google.cloud.common.OperationMetadata�
DeleteBackup..google.cloud.filestore.v1.DeleteBackupRequest.google.longrunning.Operation"{���-*+/v1/{name=projects/*/locations/*/backups/*}�Aname�A>
google.protobuf.Empty%google.cloud.common.OperationMetadata�
UpdateBackup..google.cloud.filestore.v1.UpdateBackupRequest.google.longrunning.Operation"����<22/v1/{backup.name=projects/*/locations/*/backups/*}:backup�Abackup,update_mask�A/
Backup%google.cloud.common.OperationMetadataG�Afile.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.filestore.v1BCloudFilestoreServiceProtoPZ;cloud.google.com/go/filestore/apiv1/filestorepb;filestorepb�Google.Cloud.Filestore.V1�Google\\Cloud\\Filestore\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

