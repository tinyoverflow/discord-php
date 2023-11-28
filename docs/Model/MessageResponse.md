# # MessageResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**type** | [**\OpenAPI\Client\Model\MessageType**](MessageType.md) |  |
**content** | **string** |  |
**channel_id** | **string** |  |
**author** | [**\OpenAPI\Client\Model\UserResponse**](UserResponse.md) |  |
**attachments** | [**\OpenAPI\Client\Model\MessageAttachmentResponse[]**](MessageAttachmentResponse.md) |  |
**embeds** | [**\OpenAPI\Client\Model\MessageEmbedResponse[]**](MessageEmbedResponse.md) |  |
**mentions** | [**\OpenAPI\Client\Model\UserResponse[]**](UserResponse.md) |  |
**mention_roles** | **string[]** |  |
**pinned** | **bool** |  |
**mention_everyone** | **bool** |  |
**tts** | **bool** |  |
**timestamp** | **\DateTime** |  |
**edited_timestamp** | **\DateTime** |  | [optional]
**flags** | **int** |  |
**components** | [**\OpenAPI\Client\Model\BasicMessageResponseComponentsInner[]**](BasicMessageResponseComponentsInner.md) |  |
**activity** | **object** |  | [optional]
**application** | [**\OpenAPI\Client\Model\BasicApplicationResponse**](BasicApplicationResponse.md) |  | [optional]
**application_id** | **string** |  | [optional]
**interaction** | [**\OpenAPI\Client\Model\MessageInteractionResponse**](MessageInteractionResponse.md) |  | [optional]
**nonce** | [**\OpenAPI\Client\Model\BasicMessageResponseNonce**](BasicMessageResponseNonce.md) |  | [optional]
**webhook_id** | **string** |  | [optional]
**message_reference** | [**\OpenAPI\Client\Model\MessageReferenceResponse**](MessageReferenceResponse.md) |  | [optional]
**thread** | [**\OpenAPI\Client\Model\ThreadResponse**](ThreadResponse.md) |  | [optional]
**mention_channels** | [**\OpenAPI\Client\Model\MessageMentionChannelResponse[]**](MessageMentionChannelResponse.md) |  | [optional]
**stickers** | [**\OpenAPI\Client\Model\GetSticker200Response[]**](GetSticker200Response.md) |  | [optional]
**sticker_items** | [**\OpenAPI\Client\Model\MessageStickerItemResponse[]**](MessageStickerItemResponse.md) |  | [optional]
**role_subscription_data** | [**\OpenAPI\Client\Model\MessageRoleSubscriptionDataResponse**](MessageRoleSubscriptionDataResponse.md) |  | [optional]
**purchase_notification** | [**\OpenAPI\Client\Model\PurchaseNotificationResponse**](PurchaseNotificationResponse.md) |  | [optional]
**position** | **int** |  | [optional]
**resolved** | [**\OpenAPI\Client\Model\ResolvedObjectsResponse**](ResolvedObjectsResponse.md) |  | [optional]
**reactions** | [**\OpenAPI\Client\Model\MessageReactionResponse[]**](MessageReactionResponse.md) |  | [optional]
**referenced_message** | [**\OpenAPI\Client\Model\BasicMessageResponse**](BasicMessageResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
