# # GuildCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**region** | **string** |  | [optional]
**icon** | **string** |  | [optional]
**verification_level** | [**\OpenAPI\Client\Model\VerificationLevels**](VerificationLevels.md) |  | [optional]
**default_message_notifications** | [**\OpenAPI\Client\Model\UserNotificationSettings**](UserNotificationSettings.md) |  | [optional]
**explicit_content_filter** | [**\OpenAPI\Client\Model\GuildExplicitContentFilterTypes**](GuildExplicitContentFilterTypes.md) |  | [optional]
**preferred_locale** | [**\OpenAPI\Client\Model\AvailableLocalesEnum**](AvailableLocalesEnum.md) |  | [optional]
**afk_timeout** | [**\OpenAPI\Client\Model\AfkTimeouts**](AfkTimeouts.md) |  | [optional]
**roles** | [**\OpenAPI\Client\Model\CreateGuildRequestRoleItem[]**](CreateGuildRequestRoleItem.md) |  | [optional]
**channels** | [**\OpenAPI\Client\Model\CreateGuildRequestChannelItem[]**](CreateGuildRequestChannelItem.md) |  | [optional]
**afk_channel_id** | **string** |  | [optional]
**system_channel_id** | **string** |  | [optional]
**system_channel_flags** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
