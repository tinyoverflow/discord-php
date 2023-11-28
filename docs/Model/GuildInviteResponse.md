# # GuildInviteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**OneOf**](OneOf.md) |  | [optional]
**code** | **string** |  |
**inviter** | [**\OpenAPI\Client\Model\UserResponse**](UserResponse.md) |  | [optional]
**max_age** | **int** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**is_contact** | **bool** |  | [optional]
**flags** | **int** |  | [optional]
**guild** | [**\OpenAPI\Client\Model\InviteGuildResponse**](InviteGuildResponse.md) |  | [optional]
**guild_id** | **string** |  | [optional]
**channel** | [**\OpenAPI\Client\Model\InviteChannelResponse**](InviteChannelResponse.md) |  | [optional]
**stage_instance** | [**\OpenAPI\Client\Model\InviteStageInstanceResponse**](InviteStageInstanceResponse.md) |  | [optional]
**target_type** | [**\OpenAPI\Client\Model\InviteTargetTypes**](InviteTargetTypes.md) |  | [optional]
**target_user** | [**\OpenAPI\Client\Model\UserResponse**](UserResponse.md) |  | [optional]
**target_application** | [**\OpenAPI\Client\Model\InviteApplicationResponse**](InviteApplicationResponse.md) |  | [optional]
**guild_scheduled_event** | [**\OpenAPI\Client\Model\ScheduledEventResponse**](ScheduledEventResponse.md) |  | [optional]
**uses** | **int** |  | [optional]
**max_uses** | **int** |  | [optional]
**temporary** | **bool** |  | [optional]
**approximate_member_count** | **int** |  | [optional]
**approximate_presence_count** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
