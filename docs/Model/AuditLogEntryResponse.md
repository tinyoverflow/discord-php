# # AuditLogEntryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**action_type** | [**\OpenAPI\Client\Model\AuditLogActionTypes**](AuditLogActionTypes.md) |  |
**user_id** | **string** |  | [optional]
**target_id** | **string** |  | [optional]
**changes** | [**\OpenAPI\Client\Model\AuditLogObjectChangeResponse[]**](AuditLogObjectChangeResponse.md) |  | [optional]
**options** | **array<string,string>** |  | [optional]
**reason** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
