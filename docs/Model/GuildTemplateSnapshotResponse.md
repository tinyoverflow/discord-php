# # GuildTemplateSnapshotResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**region** | **string** |  | [optional]
**verification_level** | [**\OpenAPI\Client\Model\VerificationLevels**](VerificationLevels.md) |  |
**default_message_notifications** | [**\OpenAPI\Client\Model\UserNotificationSettings**](UserNotificationSettings.md) |  |
**explicit_content_filter** | [**\OpenAPI\Client\Model\GuildExplicitContentFilterTypes**](GuildExplicitContentFilterTypes.md) |  |
**preferred_locale** | [**\OpenAPI\Client\Model\AvailableLocalesEnum**](AvailableLocalesEnum.md) |  |
**afk_channel_id** | **string** |  | [optional]
**afk_timeout** | [**\OpenAPI\Client\Model\AfkTimeouts**](AfkTimeouts.md) |  |
**system_channel_id** | **string** |  | [optional]
**system_channel_flags** | **int** |  |
**roles** | [**\OpenAPI\Client\Model\GuildTemplateRoleResponse[]**](GuildTemplateRoleResponse.md) |  |
**channels** | [**\OpenAPI\Client\Model\GuildTemplateChannelResponse[]**](GuildTemplateChannelResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
