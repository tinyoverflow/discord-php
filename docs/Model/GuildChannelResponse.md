# # GuildChannelResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**type** | [**\OpenAPI\Client\Model\ChannelTypes**](ChannelTypes.md) |  |
**last_message_id** | **string** |  | [optional]
**flags** | **int** |  |
**last_pin_timestamp** | **\DateTime** |  | [optional]
**guild_id** | **string** |  |
**name** | **string** |  |
**parent_id** | **string** |  | [optional]
**rate_limit_per_user** | **int** |  | [optional]
**bitrate** | **int** |  | [optional]
**user_limit** | **int** |  | [optional]
**rtc_region** | **string** |  | [optional]
**video_quality_mode** | [**\OpenAPI\Client\Model\VideoQualityModes**](VideoQualityModes.md) |  | [optional]
**permissions** | **string** |  | [optional]
**topic** | **string** |  | [optional]
**default_auto_archive_duration** | [**\OpenAPI\Client\Model\ThreadAutoArchiveDuration**](ThreadAutoArchiveDuration.md) |  | [optional]
**default_thread_rate_limit_per_user** | **int** |  | [optional]
**position** | **int** |  |
**permission_overwrites** | [**\OpenAPI\Client\Model\ChannelPermissionOverwriteResponse[]**](ChannelPermissionOverwriteResponse.md) |  | [optional]
**nsfw** | **bool** |  | [optional]
**available_tags** | [**\OpenAPI\Client\Model\ForumTagResponse[]**](ForumTagResponse.md) |  | [optional]
**default_reaction_emoji** | [**\OpenAPI\Client\Model\DefaultReactionEmojiResponse**](DefaultReactionEmojiResponse.md) |  | [optional]
**default_sort_order** | [**\OpenAPI\Client\Model\ThreadSortOrder**](ThreadSortOrder.md) |  | [optional]
**default_forum_layout** | [**\OpenAPI\Client\Model\ForumLayout**](ForumLayout.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
