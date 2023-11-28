# # ExternalScheduledEventResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**guild_id** | **string** |  |
**name** | **string** |  |
**description** | **string** |  | [optional]
**channel_id** | **string** |  | [optional]
**creator_id** | **string** |  | [optional]
**creator** | [**\OpenAPI\Client\Model\UserResponse**](UserResponse.md) |  | [optional]
**image** | **string** |  | [optional]
**scheduled_start_time** | **\DateTime** |  |
**scheduled_end_time** | **\DateTime** |  | [optional]
**status** | [**\OpenAPI\Client\Model\GuildScheduledEventStatuses**](GuildScheduledEventStatuses.md) |  |
**entity_type** | [**\OpenAPI\Client\Model\GuildScheduledEventEntityTypes**](GuildScheduledEventEntityTypes.md) |  |
**entity_id** | **string** |  | [optional]
**user_count** | **int** |  | [optional]
**privacy_level** | [**\OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels**](GuildScheduledEventPrivacyLevels.md) |  |
**user_rsvp** | [**\OpenAPI\Client\Model\ScheduledEventUserResponse**](ScheduledEventUserResponse.md) |  | [optional]
**auto_start** | **bool** |  |
**entity_metadata** | [**\OpenAPI\Client\Model\EntityMetadataExternalResponse**](EntityMetadataExternalResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
