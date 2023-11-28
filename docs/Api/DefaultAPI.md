# OpenAPI\Client\DefaultAPI

All URIs are relative to https://discord.com/api/v10, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addGroupDmUser()**](DefaultAPI.md#addGroupDmUser) | **PUT** /channels/{channel_id}/recipients/{user_id} |  |
| [**addGuildMember()**](DefaultAPI.md#addGuildMember) | **PUT** /guilds/{guild_id}/members/{user_id} |  |
| [**addGuildMemberRole()**](DefaultAPI.md#addGuildMemberRole) | **PUT** /guilds/{guild_id}/members/{user_id}/roles/{role_id} |  |
| [**addMyMessageReaction()**](DefaultAPI.md#addMyMessageReaction) | **PUT** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name}/@me |  |
| [**addThreadMember()**](DefaultAPI.md#addThreadMember) | **PUT** /channels/{channel_id}/thread-members/{user_id} |  |
| [**banUserFromGuild()**](DefaultAPI.md#banUserFromGuild) | **PUT** /guilds/{guild_id}/bans/{user_id} |  |
| [**bulkDeleteMessages()**](DefaultAPI.md#bulkDeleteMessages) | **POST** /channels/{channel_id}/messages/bulk-delete |  |
| [**bulkSetApplicationCommands()**](DefaultAPI.md#bulkSetApplicationCommands) | **PUT** /applications/{application_id}/commands |  |
| [**bulkSetGuildApplicationCommands()**](DefaultAPI.md#bulkSetGuildApplicationCommands) | **PUT** /applications/{application_id}/guilds/{guild_id}/commands |  |
| [**bulkUpdateGuildChannels()**](DefaultAPI.md#bulkUpdateGuildChannels) | **PATCH** /guilds/{guild_id}/channels |  |
| [**bulkUpdateGuildRoles()**](DefaultAPI.md#bulkUpdateGuildRoles) | **PATCH** /guilds/{guild_id}/roles |  |
| [**createApplicationCommand()**](DefaultAPI.md#createApplicationCommand) | **POST** /applications/{application_id}/commands |  |
| [**createAutoModerationRule()**](DefaultAPI.md#createAutoModerationRule) | **POST** /guilds/{guild_id}/auto-moderation/rules |  |
| [**createChannelInvite()**](DefaultAPI.md#createChannelInvite) | **POST** /channels/{channel_id}/invites |  |
| [**createDm()**](DefaultAPI.md#createDm) | **POST** /users/@me/channels |  |
| [**createGuild()**](DefaultAPI.md#createGuild) | **POST** /guilds |  |
| [**createGuildApplicationCommand()**](DefaultAPI.md#createGuildApplicationCommand) | **POST** /applications/{application_id}/guilds/{guild_id}/commands |  |
| [**createGuildChannel()**](DefaultAPI.md#createGuildChannel) | **POST** /guilds/{guild_id}/channels |  |
| [**createGuildEmoji()**](DefaultAPI.md#createGuildEmoji) | **POST** /guilds/{guild_id}/emojis |  |
| [**createGuildFromTemplate()**](DefaultAPI.md#createGuildFromTemplate) | **POST** /guilds/templates/{code} |  |
| [**createGuildRole()**](DefaultAPI.md#createGuildRole) | **POST** /guilds/{guild_id}/roles |  |
| [**createGuildScheduledEvent()**](DefaultAPI.md#createGuildScheduledEvent) | **POST** /guilds/{guild_id}/scheduled-events |  |
| [**createGuildSticker()**](DefaultAPI.md#createGuildSticker) | **POST** /guilds/{guild_id}/stickers |  |
| [**createGuildTemplate()**](DefaultAPI.md#createGuildTemplate) | **POST** /guilds/{guild_id}/templates |  |
| [**createInteractionResponse()**](DefaultAPI.md#createInteractionResponse) | **POST** /interactions/{interaction_id}/{interaction_token}/callback |  |
| [**createMessage()**](DefaultAPI.md#createMessage) | **POST** /channels/{channel_id}/messages |  |
| [**createStageInstance()**](DefaultAPI.md#createStageInstance) | **POST** /stage-instances |  |
| [**createThread()**](DefaultAPI.md#createThread) | **POST** /channels/{channel_id}/threads |  |
| [**createThreadFromMessage()**](DefaultAPI.md#createThreadFromMessage) | **POST** /channels/{channel_id}/messages/{message_id}/threads |  |
| [**createWebhook()**](DefaultAPI.md#createWebhook) | **POST** /channels/{channel_id}/webhooks |  |
| [**crosspostMessage()**](DefaultAPI.md#crosspostMessage) | **POST** /channels/{channel_id}/messages/{message_id}/crosspost |  |
| [**deleteAllMessageReactions()**](DefaultAPI.md#deleteAllMessageReactions) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions |  |
| [**deleteAllMessageReactionsByEmoji()**](DefaultAPI.md#deleteAllMessageReactionsByEmoji) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name} |  |
| [**deleteApplicationCommand()**](DefaultAPI.md#deleteApplicationCommand) | **DELETE** /applications/{application_id}/commands/{command_id} |  |
| [**deleteAutoModerationRule()**](DefaultAPI.md#deleteAutoModerationRule) | **DELETE** /guilds/{guild_id}/auto-moderation/rules/{rule_id} |  |
| [**deleteChannel()**](DefaultAPI.md#deleteChannel) | **DELETE** /channels/{channel_id} |  |
| [**deleteChannelPermissionOverwrite()**](DefaultAPI.md#deleteChannelPermissionOverwrite) | **DELETE** /channels/{channel_id}/permissions/{overwrite_id} |  |
| [**deleteGroupDmUser()**](DefaultAPI.md#deleteGroupDmUser) | **DELETE** /channels/{channel_id}/recipients/{user_id} |  |
| [**deleteGuild()**](DefaultAPI.md#deleteGuild) | **DELETE** /guilds/{guild_id} |  |
| [**deleteGuildApplicationCommand()**](DefaultAPI.md#deleteGuildApplicationCommand) | **DELETE** /applications/{application_id}/guilds/{guild_id}/commands/{command_id} |  |
| [**deleteGuildEmoji()**](DefaultAPI.md#deleteGuildEmoji) | **DELETE** /guilds/{guild_id}/emojis/{emoji_id} |  |
| [**deleteGuildIntegration()**](DefaultAPI.md#deleteGuildIntegration) | **DELETE** /guilds/{guild_id}/integrations/{integration_id} |  |
| [**deleteGuildMember()**](DefaultAPI.md#deleteGuildMember) | **DELETE** /guilds/{guild_id}/members/{user_id} |  |
| [**deleteGuildMemberRole()**](DefaultAPI.md#deleteGuildMemberRole) | **DELETE** /guilds/{guild_id}/members/{user_id}/roles/{role_id} |  |
| [**deleteGuildRole()**](DefaultAPI.md#deleteGuildRole) | **DELETE** /guilds/{guild_id}/roles/{role_id} |  |
| [**deleteGuildScheduledEvent()**](DefaultAPI.md#deleteGuildScheduledEvent) | **DELETE** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id} |  |
| [**deleteGuildSticker()**](DefaultAPI.md#deleteGuildSticker) | **DELETE** /guilds/{guild_id}/stickers/{sticker_id} |  |
| [**deleteGuildTemplate()**](DefaultAPI.md#deleteGuildTemplate) | **DELETE** /guilds/{guild_id}/templates/{code} |  |
| [**deleteMessage()**](DefaultAPI.md#deleteMessage) | **DELETE** /channels/{channel_id}/messages/{message_id} |  |
| [**deleteMyMessageReaction()**](DefaultAPI.md#deleteMyMessageReaction) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name}/@me |  |
| [**deleteOriginalWebhookMessage()**](DefaultAPI.md#deleteOriginalWebhookMessage) | **DELETE** /webhooks/{webhook_id}/{webhook_token}/messages/@original |  |
| [**deleteStageInstance()**](DefaultAPI.md#deleteStageInstance) | **DELETE** /stage-instances/{channel_id} |  |
| [**deleteThreadMember()**](DefaultAPI.md#deleteThreadMember) | **DELETE** /channels/{channel_id}/thread-members/{user_id} |  |
| [**deleteUserMessageReaction()**](DefaultAPI.md#deleteUserMessageReaction) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name}/{user_id} |  |
| [**deleteWebhook()**](DefaultAPI.md#deleteWebhook) | **DELETE** /webhooks/{webhook_id} |  |
| [**deleteWebhookByToken()**](DefaultAPI.md#deleteWebhookByToken) | **DELETE** /webhooks/{webhook_id}/{webhook_token} |  |
| [**deleteWebhookMessage()**](DefaultAPI.md#deleteWebhookMessage) | **DELETE** /webhooks/{webhook_id}/{webhook_token}/messages/{message_id} |  |
| [**executeGithubCompatibleWebhook()**](DefaultAPI.md#executeGithubCompatibleWebhook) | **POST** /webhooks/{webhook_id}/{webhook_token}/github |  |
| [**executeSlackCompatibleWebhook()**](DefaultAPI.md#executeSlackCompatibleWebhook) | **POST** /webhooks/{webhook_id}/{webhook_token}/slack |  |
| [**executeWebhook()**](DefaultAPI.md#executeWebhook) | **POST** /webhooks/{webhook_id}/{webhook_token} |  |
| [**followChannel()**](DefaultAPI.md#followChannel) | **POST** /channels/{channel_id}/followers |  |
| [**getActiveGuildThreads()**](DefaultAPI.md#getActiveGuildThreads) | **GET** /guilds/{guild_id}/threads/active |  |
| [**getApplication()**](DefaultAPI.md#getApplication) | **GET** /applications/{application_id} |  |
| [**getApplicationCommand()**](DefaultAPI.md#getApplicationCommand) | **GET** /applications/{application_id}/commands/{command_id} |  |
| [**getApplicationRoleConnectionsMetadata()**](DefaultAPI.md#getApplicationRoleConnectionsMetadata) | **GET** /applications/{application_id}/role-connections/metadata |  |
| [**getApplicationUserRoleConnection()**](DefaultAPI.md#getApplicationUserRoleConnection) | **GET** /users/@me/applications/{application_id}/role-connection |  |
| [**getAutoModerationRule()**](DefaultAPI.md#getAutoModerationRule) | **GET** /guilds/{guild_id}/auto-moderation/rules/{rule_id} |  |
| [**getBotGateway()**](DefaultAPI.md#getBotGateway) | **GET** /gateway/bot |  |
| [**getChannel()**](DefaultAPI.md#getChannel) | **GET** /channels/{channel_id} |  |
| [**getGateway()**](DefaultAPI.md#getGateway) | **GET** /gateway |  |
| [**getGuild()**](DefaultAPI.md#getGuild) | **GET** /guilds/{guild_id} |  |
| [**getGuildApplicationCommand()**](DefaultAPI.md#getGuildApplicationCommand) | **GET** /applications/{application_id}/guilds/{guild_id}/commands/{command_id} |  |
| [**getGuildApplicationCommandPermissions()**](DefaultAPI.md#getGuildApplicationCommandPermissions) | **GET** /applications/{application_id}/guilds/{guild_id}/commands/{command_id}/permissions |  |
| [**getGuildBan()**](DefaultAPI.md#getGuildBan) | **GET** /guilds/{guild_id}/bans/{user_id} |  |
| [**getGuildEmoji()**](DefaultAPI.md#getGuildEmoji) | **GET** /guilds/{guild_id}/emojis/{emoji_id} |  |
| [**getGuildMember()**](DefaultAPI.md#getGuildMember) | **GET** /guilds/{guild_id}/members/{user_id} |  |
| [**getGuildNewMemberWelcome()**](DefaultAPI.md#getGuildNewMemberWelcome) | **GET** /guilds/{guild_id}/new-member-welcome |  |
| [**getGuildPreview()**](DefaultAPI.md#getGuildPreview) | **GET** /guilds/{guild_id}/preview |  |
| [**getGuildScheduledEvent()**](DefaultAPI.md#getGuildScheduledEvent) | **GET** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id} |  |
| [**getGuildSticker()**](DefaultAPI.md#getGuildSticker) | **GET** /guilds/{guild_id}/stickers/{sticker_id} |  |
| [**getGuildTemplate()**](DefaultAPI.md#getGuildTemplate) | **GET** /guilds/templates/{code} |  |
| [**getGuildVanityUrl()**](DefaultAPI.md#getGuildVanityUrl) | **GET** /guilds/{guild_id}/vanity-url |  |
| [**getGuildWebhooks()**](DefaultAPI.md#getGuildWebhooks) | **GET** /guilds/{guild_id}/webhooks |  |
| [**getGuildWelcomeScreen()**](DefaultAPI.md#getGuildWelcomeScreen) | **GET** /guilds/{guild_id}/welcome-screen |  |
| [**getGuildWidget()**](DefaultAPI.md#getGuildWidget) | **GET** /guilds/{guild_id}/widget.json |  |
| [**getGuildWidgetPng()**](DefaultAPI.md#getGuildWidgetPng) | **GET** /guilds/{guild_id}/widget.png |  |
| [**getGuildWidgetSettings()**](DefaultAPI.md#getGuildWidgetSettings) | **GET** /guilds/{guild_id}/widget |  |
| [**getGuildsOnboarding()**](DefaultAPI.md#getGuildsOnboarding) | **GET** /guilds/{guild_id}/onboarding |  |
| [**getMessage()**](DefaultAPI.md#getMessage) | **GET** /channels/{channel_id}/messages/{message_id} |  |
| [**getMyApplication()**](DefaultAPI.md#getMyApplication) | **GET** /applications/@me |  |
| [**getMyGuildMember()**](DefaultAPI.md#getMyGuildMember) | **GET** /users/@me/guilds/{guild_id}/member |  |
| [**getMyOauth2Application()**](DefaultAPI.md#getMyOauth2Application) | **GET** /oauth2/applications/@me |  |
| [**getMyOauth2Authorization()**](DefaultAPI.md#getMyOauth2Authorization) | **GET** /oauth2/@me |  |
| [**getMyUser()**](DefaultAPI.md#getMyUser) | **GET** /users/@me |  |
| [**getOriginalWebhookMessage()**](DefaultAPI.md#getOriginalWebhookMessage) | **GET** /webhooks/{webhook_id}/{webhook_token}/messages/@original |  |
| [**getStageInstance()**](DefaultAPI.md#getStageInstance) | **GET** /stage-instances/{channel_id} |  |
| [**getSticker()**](DefaultAPI.md#getSticker) | **GET** /stickers/{sticker_id} |  |
| [**getThreadMember()**](DefaultAPI.md#getThreadMember) | **GET** /channels/{channel_id}/thread-members/{user_id} |  |
| [**getUser()**](DefaultAPI.md#getUser) | **GET** /users/{user_id} |  |
| [**getWebhook()**](DefaultAPI.md#getWebhook) | **GET** /webhooks/{webhook_id} |  |
| [**getWebhookByToken()**](DefaultAPI.md#getWebhookByToken) | **GET** /webhooks/{webhook_id}/{webhook_token} |  |
| [**getWebhookMessage()**](DefaultAPI.md#getWebhookMessage) | **GET** /webhooks/{webhook_id}/{webhook_token}/messages/{message_id} |  |
| [**inviteResolve()**](DefaultAPI.md#inviteResolve) | **GET** /invites/{code} |  |
| [**inviteRevoke()**](DefaultAPI.md#inviteRevoke) | **DELETE** /invites/{code} |  |
| [**joinThread()**](DefaultAPI.md#joinThread) | **PUT** /channels/{channel_id}/thread-members/@me |  |
| [**leaveGuild()**](DefaultAPI.md#leaveGuild) | **DELETE** /users/@me/guilds/{guild_id} |  |
| [**leaveThread()**](DefaultAPI.md#leaveThread) | **DELETE** /channels/{channel_id}/thread-members/@me |  |
| [**listApplicationCommands()**](DefaultAPI.md#listApplicationCommands) | **GET** /applications/{application_id}/commands |  |
| [**listAutoModerationRules()**](DefaultAPI.md#listAutoModerationRules) | **GET** /guilds/{guild_id}/auto-moderation/rules |  |
| [**listChannelInvites()**](DefaultAPI.md#listChannelInvites) | **GET** /channels/{channel_id}/invites |  |
| [**listChannelWebhooks()**](DefaultAPI.md#listChannelWebhooks) | **GET** /channels/{channel_id}/webhooks |  |
| [**listGuildApplicationCommandPermissions()**](DefaultAPI.md#listGuildApplicationCommandPermissions) | **GET** /applications/{application_id}/guilds/{guild_id}/commands/permissions |  |
| [**listGuildApplicationCommands()**](DefaultAPI.md#listGuildApplicationCommands) | **GET** /applications/{application_id}/guilds/{guild_id}/commands |  |
| [**listGuildAuditLogEntries()**](DefaultAPI.md#listGuildAuditLogEntries) | **GET** /guilds/{guild_id}/audit-logs |  |
| [**listGuildBans()**](DefaultAPI.md#listGuildBans) | **GET** /guilds/{guild_id}/bans |  |
| [**listGuildChannels()**](DefaultAPI.md#listGuildChannels) | **GET** /guilds/{guild_id}/channels |  |
| [**listGuildEmojis()**](DefaultAPI.md#listGuildEmojis) | **GET** /guilds/{guild_id}/emojis |  |
| [**listGuildIntegrations()**](DefaultAPI.md#listGuildIntegrations) | **GET** /guilds/{guild_id}/integrations |  |
| [**listGuildInvites()**](DefaultAPI.md#listGuildInvites) | **GET** /guilds/{guild_id}/invites |  |
| [**listGuildMembers()**](DefaultAPI.md#listGuildMembers) | **GET** /guilds/{guild_id}/members |  |
| [**listGuildRoles()**](DefaultAPI.md#listGuildRoles) | **GET** /guilds/{guild_id}/roles |  |
| [**listGuildScheduledEventUsers()**](DefaultAPI.md#listGuildScheduledEventUsers) | **GET** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id}/users |  |
| [**listGuildScheduledEvents()**](DefaultAPI.md#listGuildScheduledEvents) | **GET** /guilds/{guild_id}/scheduled-events |  |
| [**listGuildStickers()**](DefaultAPI.md#listGuildStickers) | **GET** /guilds/{guild_id}/stickers |  |
| [**listGuildTemplates()**](DefaultAPI.md#listGuildTemplates) | **GET** /guilds/{guild_id}/templates |  |
| [**listGuildVoiceRegions()**](DefaultAPI.md#listGuildVoiceRegions) | **GET** /guilds/{guild_id}/regions |  |
| [**listMessageReactionsByEmoji()**](DefaultAPI.md#listMessageReactionsByEmoji) | **GET** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name} |  |
| [**listMessages()**](DefaultAPI.md#listMessages) | **GET** /channels/{channel_id}/messages |  |
| [**listMyConnections()**](DefaultAPI.md#listMyConnections) | **GET** /users/@me/connections |  |
| [**listMyGuilds()**](DefaultAPI.md#listMyGuilds) | **GET** /users/@me/guilds |  |
| [**listMyPrivateArchivedThreads()**](DefaultAPI.md#listMyPrivateArchivedThreads) | **GET** /channels/{channel_id}/users/@me/threads/archived/private |  |
| [**listPinnedMessages()**](DefaultAPI.md#listPinnedMessages) | **GET** /channels/{channel_id}/pins |  |
| [**listPrivateArchivedThreads()**](DefaultAPI.md#listPrivateArchivedThreads) | **GET** /channels/{channel_id}/threads/archived/private |  |
| [**listPublicArchivedThreads()**](DefaultAPI.md#listPublicArchivedThreads) | **GET** /channels/{channel_id}/threads/archived/public |  |
| [**listStickerPacks()**](DefaultAPI.md#listStickerPacks) | **GET** /sticker-packs |  |
| [**listThreadMembers()**](DefaultAPI.md#listThreadMembers) | **GET** /channels/{channel_id}/thread-members |  |
| [**listVoiceRegions()**](DefaultAPI.md#listVoiceRegions) | **GET** /voice/regions |  |
| [**pinMessage()**](DefaultAPI.md#pinMessage) | **PUT** /channels/{channel_id}/pins/{message_id} |  |
| [**previewPruneGuild()**](DefaultAPI.md#previewPruneGuild) | **GET** /guilds/{guild_id}/prune |  |
| [**pruneGuild()**](DefaultAPI.md#pruneGuild) | **POST** /guilds/{guild_id}/prune |  |
| [**putGuildsOnboarding()**](DefaultAPI.md#putGuildsOnboarding) | **PUT** /guilds/{guild_id}/onboarding |  |
| [**searchGuildMembers()**](DefaultAPI.md#searchGuildMembers) | **GET** /guilds/{guild_id}/members/search |  |
| [**setChannelPermissionOverwrite()**](DefaultAPI.md#setChannelPermissionOverwrite) | **PUT** /channels/{channel_id}/permissions/{overwrite_id} |  |
| [**setGuildApplicationCommandPermissions()**](DefaultAPI.md#setGuildApplicationCommandPermissions) | **PUT** /applications/{application_id}/guilds/{guild_id}/commands/{command_id}/permissions |  |
| [**setGuildMfaLevel()**](DefaultAPI.md#setGuildMfaLevel) | **POST** /guilds/{guild_id}/mfa |  |
| [**syncGuildTemplate()**](DefaultAPI.md#syncGuildTemplate) | **PUT** /guilds/{guild_id}/templates/{code} |  |
| [**triggerTypingIndicator()**](DefaultAPI.md#triggerTypingIndicator) | **POST** /channels/{channel_id}/typing |  |
| [**unbanUserFromGuild()**](DefaultAPI.md#unbanUserFromGuild) | **DELETE** /guilds/{guild_id}/bans/{user_id} |  |
| [**unpinMessage()**](DefaultAPI.md#unpinMessage) | **DELETE** /channels/{channel_id}/pins/{message_id} |  |
| [**updateApplication()**](DefaultAPI.md#updateApplication) | **PATCH** /applications/{application_id} |  |
| [**updateApplicationCommand()**](DefaultAPI.md#updateApplicationCommand) | **PATCH** /applications/{application_id}/commands/{command_id} |  |
| [**updateApplicationRoleConnectionsMetadata()**](DefaultAPI.md#updateApplicationRoleConnectionsMetadata) | **PUT** /applications/{application_id}/role-connections/metadata |  |
| [**updateApplicationUserRoleConnection()**](DefaultAPI.md#updateApplicationUserRoleConnection) | **PUT** /users/@me/applications/{application_id}/role-connection |  |
| [**updateAutoModerationRule()**](DefaultAPI.md#updateAutoModerationRule) | **PATCH** /guilds/{guild_id}/auto-moderation/rules/{rule_id} |  |
| [**updateChannel()**](DefaultAPI.md#updateChannel) | **PATCH** /channels/{channel_id} |  |
| [**updateGuild()**](DefaultAPI.md#updateGuild) | **PATCH** /guilds/{guild_id} |  |
| [**updateGuildApplicationCommand()**](DefaultAPI.md#updateGuildApplicationCommand) | **PATCH** /applications/{application_id}/guilds/{guild_id}/commands/{command_id} |  |
| [**updateGuildEmoji()**](DefaultAPI.md#updateGuildEmoji) | **PATCH** /guilds/{guild_id}/emojis/{emoji_id} |  |
| [**updateGuildMember()**](DefaultAPI.md#updateGuildMember) | **PATCH** /guilds/{guild_id}/members/{user_id} |  |
| [**updateGuildRole()**](DefaultAPI.md#updateGuildRole) | **PATCH** /guilds/{guild_id}/roles/{role_id} |  |
| [**updateGuildScheduledEvent()**](DefaultAPI.md#updateGuildScheduledEvent) | **PATCH** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id} |  |
| [**updateGuildSticker()**](DefaultAPI.md#updateGuildSticker) | **PATCH** /guilds/{guild_id}/stickers/{sticker_id} |  |
| [**updateGuildTemplate()**](DefaultAPI.md#updateGuildTemplate) | **PATCH** /guilds/{guild_id}/templates/{code} |  |
| [**updateGuildWelcomeScreen()**](DefaultAPI.md#updateGuildWelcomeScreen) | **PATCH** /guilds/{guild_id}/welcome-screen |  |
| [**updateGuildWidgetSettings()**](DefaultAPI.md#updateGuildWidgetSettings) | **PATCH** /guilds/{guild_id}/widget |  |
| [**updateMessage()**](DefaultAPI.md#updateMessage) | **PATCH** /channels/{channel_id}/messages/{message_id} |  |
| [**updateMyApplication()**](DefaultAPI.md#updateMyApplication) | **PATCH** /applications/@me |  |
| [**updateMyGuildMember()**](DefaultAPI.md#updateMyGuildMember) | **PATCH** /guilds/{guild_id}/members/@me |  |
| [**updateMyUser()**](DefaultAPI.md#updateMyUser) | **PATCH** /users/@me |  |
| [**updateOriginalWebhookMessage()**](DefaultAPI.md#updateOriginalWebhookMessage) | **PATCH** /webhooks/{webhook_id}/{webhook_token}/messages/@original |  |
| [**updateSelfVoiceState()**](DefaultAPI.md#updateSelfVoiceState) | **PATCH** /guilds/{guild_id}/voice-states/@me |  |
| [**updateStageInstance()**](DefaultAPI.md#updateStageInstance) | **PATCH** /stage-instances/{channel_id} |  |
| [**updateVoiceState()**](DefaultAPI.md#updateVoiceState) | **PATCH** /guilds/{guild_id}/voice-states/{user_id} |  |
| [**updateWebhook()**](DefaultAPI.md#updateWebhook) | **PATCH** /webhooks/{webhook_id} |  |
| [**updateWebhookByToken()**](DefaultAPI.md#updateWebhookByToken) | **PATCH** /webhooks/{webhook_id}/{webhook_token} |  |
| [**updateWebhookMessage()**](DefaultAPI.md#updateWebhookMessage) | **PATCH** /webhooks/{webhook_id}/{webhook_token}/messages/{message_id} |  |


## `addGroupDmUser()`

```php
addGroupDmUser($channel_id, $user_id, $add_group_dm_user_request): \OpenAPI\Client\Model\CreateDm200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$user_id = 'user_id_example'; // string
$add_group_dm_user_request = new \OpenAPI\Client\Model\AddGroupDmUserRequest(); // \OpenAPI\Client\Model\AddGroupDmUserRequest

try {
    $result = $apiInstance->addGroupDmUser($channel_id, $user_id, $add_group_dm_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->addGroupDmUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **user_id** | **string**|  | |
| **add_group_dm_user_request** | [**\OpenAPI\Client\Model\AddGroupDmUserRequest**](../Model/AddGroupDmUserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateDm200Response**](../Model/CreateDm200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addGuildMember()`

```php
addGuildMember($guild_id, $user_id, $add_guild_member_request): \OpenAPI\Client\Model\GuildMemberResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$add_guild_member_request = new \OpenAPI\Client\Model\AddGuildMemberRequest(); // \OpenAPI\Client\Model\AddGuildMemberRequest

try {
    $result = $apiInstance->addGuildMember($guild_id, $user_id, $add_guild_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->addGuildMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |
| **add_guild_member_request** | [**\OpenAPI\Client\Model\AddGuildMemberRequest**](../Model/AddGuildMemberRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildMemberResponse**](../Model/GuildMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addGuildMemberRole()`

```php
addGuildMemberRole($guild_id, $user_id, $role_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$role_id = 'role_id_example'; // string

try {
    $apiInstance->addGuildMemberRole($guild_id, $user_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->addGuildMemberRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |
| **role_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addMyMessageReaction()`

```php
addMyMessageReaction($channel_id, $message_id, $emoji_name)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$emoji_name = 'emoji_name_example'; // string

try {
    $apiInstance->addMyMessageReaction($channel_id, $message_id, $emoji_name);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->addMyMessageReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **emoji_name** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addThreadMember()`

```php
addThreadMember($channel_id, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $apiInstance->addThreadMember($channel_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->addThreadMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `banUserFromGuild()`

```php
banUserFromGuild($guild_id, $user_id, $ban_user_from_guild_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$ban_user_from_guild_request = new \OpenAPI\Client\Model\BanUserFromGuildRequest(); // \OpenAPI\Client\Model\BanUserFromGuildRequest

try {
    $apiInstance->banUserFromGuild($guild_id, $user_id, $ban_user_from_guild_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->banUserFromGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |
| **ban_user_from_guild_request** | [**\OpenAPI\Client\Model\BanUserFromGuildRequest**](../Model/BanUserFromGuildRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteMessages()`

```php
bulkDeleteMessages($channel_id, $bulk_delete_messages_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$bulk_delete_messages_request = new \OpenAPI\Client\Model\BulkDeleteMessagesRequest(); // \OpenAPI\Client\Model\BulkDeleteMessagesRequest

try {
    $apiInstance->bulkDeleteMessages($channel_id, $bulk_delete_messages_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->bulkDeleteMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **bulk_delete_messages_request** | [**\OpenAPI\Client\Model\BulkDeleteMessagesRequest**](../Model/BulkDeleteMessagesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkSetApplicationCommands()`

```php
bulkSetApplicationCommands($application_id, $application_command_update_request): \OpenAPI\Client\Model\ApplicationCommandResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$application_command_update_request = array(new \OpenAPI\Client\Model\ApplicationCommandUpdateRequest()); // \OpenAPI\Client\Model\ApplicationCommandUpdateRequest[]

try {
    $result = $apiInstance->bulkSetApplicationCommands($application_id, $application_command_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->bulkSetApplicationCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **application_command_update_request** | [**\OpenAPI\Client\Model\ApplicationCommandUpdateRequest[]**](../Model/ApplicationCommandUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse[]**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkSetGuildApplicationCommands()`

```php
bulkSetGuildApplicationCommands($application_id, $guild_id, $application_command_update_request): \OpenAPI\Client\Model\ApplicationCommandResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$application_command_update_request = array(new \OpenAPI\Client\Model\ApplicationCommandUpdateRequest()); // \OpenAPI\Client\Model\ApplicationCommandUpdateRequest[]

try {
    $result = $apiInstance->bulkSetGuildApplicationCommands($application_id, $guild_id, $application_command_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->bulkSetGuildApplicationCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **application_command_update_request** | [**\OpenAPI\Client\Model\ApplicationCommandUpdateRequest[]**](../Model/ApplicationCommandUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse[]**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateGuildChannels()`

```php
bulkUpdateGuildChannels($guild_id, $bulk_update_guild_channels_request_inner)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$bulk_update_guild_channels_request_inner = array(new \OpenAPI\Client\Model\BulkUpdateGuildChannelsRequestInner()); // \OpenAPI\Client\Model\BulkUpdateGuildChannelsRequestInner[]

try {
    $apiInstance->bulkUpdateGuildChannels($guild_id, $bulk_update_guild_channels_request_inner);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->bulkUpdateGuildChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **bulk_update_guild_channels_request_inner** | [**\OpenAPI\Client\Model\BulkUpdateGuildChannelsRequestInner[]**](../Model/BulkUpdateGuildChannelsRequestInner.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateGuildRoles()`

```php
bulkUpdateGuildRoles($guild_id, $bulk_update_guild_roles_request_inner): \OpenAPI\Client\Model\GuildRoleResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$bulk_update_guild_roles_request_inner = array(new \OpenAPI\Client\Model\BulkUpdateGuildRolesRequestInner()); // \OpenAPI\Client\Model\BulkUpdateGuildRolesRequestInner[]

try {
    $result = $apiInstance->bulkUpdateGuildRoles($guild_id, $bulk_update_guild_roles_request_inner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->bulkUpdateGuildRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **bulk_update_guild_roles_request_inner** | [**\OpenAPI\Client\Model\BulkUpdateGuildRolesRequestInner[]**](../Model/BulkUpdateGuildRolesRequestInner.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildRoleResponse[]**](../Model/GuildRoleResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApplicationCommand()`

```php
createApplicationCommand($application_id, $application_command_create_request): \OpenAPI\Client\Model\ApplicationCommandResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$application_command_create_request = new \OpenAPI\Client\Model\ApplicationCommandCreateRequest(); // \OpenAPI\Client\Model\ApplicationCommandCreateRequest

try {
    $result = $apiInstance->createApplicationCommand($application_id, $application_command_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **application_command_create_request** | [**\OpenAPI\Client\Model\ApplicationCommandCreateRequest**](../Model/ApplicationCommandCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAutoModerationRule()`

```php
createAutoModerationRule($guild_id, $create_auto_moderation_rule_request): \OpenAPI\Client\Model\GetAutoModerationRule200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$create_auto_moderation_rule_request = new \OpenAPI\Client\Model\CreateAutoModerationRuleRequest(); // \OpenAPI\Client\Model\CreateAutoModerationRuleRequest

try {
    $result = $apiInstance->createAutoModerationRule($guild_id, $create_auto_moderation_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createAutoModerationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **create_auto_moderation_rule_request** | [**\OpenAPI\Client\Model\CreateAutoModerationRuleRequest**](../Model/CreateAutoModerationRuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetAutoModerationRule200Response**](../Model/GetAutoModerationRule200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChannelInvite()`

```php
createChannelInvite($channel_id, $create_channel_invite_request): \OpenAPI\Client\Model\ListChannelInvites200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$create_channel_invite_request = new \OpenAPI\Client\Model\CreateChannelInviteRequest(); // \OpenAPI\Client\Model\CreateChannelInviteRequest

try {
    $result = $apiInstance->createChannelInvite($channel_id, $create_channel_invite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createChannelInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **create_channel_invite_request** | [**\OpenAPI\Client\Model\CreateChannelInviteRequest**](../Model/CreateChannelInviteRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelInvites200ResponseInner**](../Model/ListChannelInvites200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDm()`

```php
createDm($create_private_channel_request): \OpenAPI\Client\Model\CreateDm200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_private_channel_request = new \OpenAPI\Client\Model\CreatePrivateChannelRequest(); // \OpenAPI\Client\Model\CreatePrivateChannelRequest

try {
    $result = $apiInstance->createDm($create_private_channel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createDm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_private_channel_request** | [**\OpenAPI\Client\Model\CreatePrivateChannelRequest**](../Model/CreatePrivateChannelRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateDm200Response**](../Model/CreateDm200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuild()`

```php
createGuild($guild_create_request): \OpenAPI\Client\Model\GuildResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_create_request = new \OpenAPI\Client\Model\GuildCreateRequest(); // \OpenAPI\Client\Model\GuildCreateRequest

try {
    $result = $apiInstance->createGuild($guild_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_create_request** | [**\OpenAPI\Client\Model\GuildCreateRequest**](../Model/GuildCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildResponse**](../Model/GuildResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildApplicationCommand()`

```php
createGuildApplicationCommand($application_id, $guild_id, $application_command_create_request): \OpenAPI\Client\Model\ApplicationCommandResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$application_command_create_request = new \OpenAPI\Client\Model\ApplicationCommandCreateRequest(); // \OpenAPI\Client\Model\ApplicationCommandCreateRequest

try {
    $result = $apiInstance->createGuildApplicationCommand($application_id, $guild_id, $application_command_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **application_command_create_request** | [**\OpenAPI\Client\Model\ApplicationCommandCreateRequest**](../Model/ApplicationCommandCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildChannel()`

```php
createGuildChannel($guild_id, $create_guild_channel_request): \OpenAPI\Client\Model\GuildChannelResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$create_guild_channel_request = new \OpenAPI\Client\Model\CreateGuildChannelRequest(); // \OpenAPI\Client\Model\CreateGuildChannelRequest

try {
    $result = $apiInstance->createGuildChannel($guild_id, $create_guild_channel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **create_guild_channel_request** | [**\OpenAPI\Client\Model\CreateGuildChannelRequest**](../Model/CreateGuildChannelRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildChannelResponse**](../Model/GuildChannelResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildEmoji()`

```php
createGuildEmoji($guild_id, $create_guild_emoji_request): \OpenAPI\Client\Model\EmojiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$create_guild_emoji_request = new \OpenAPI\Client\Model\CreateGuildEmojiRequest(); // \OpenAPI\Client\Model\CreateGuildEmojiRequest

try {
    $result = $apiInstance->createGuildEmoji($guild_id, $create_guild_emoji_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildEmoji: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **create_guild_emoji_request** | [**\OpenAPI\Client\Model\CreateGuildEmojiRequest**](../Model/CreateGuildEmojiRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmojiResponse**](../Model/EmojiResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildFromTemplate()`

```php
createGuildFromTemplate($code, $create_guild_from_template_request): \OpenAPI\Client\Model\GuildResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string
$create_guild_from_template_request = new \OpenAPI\Client\Model\CreateGuildFromTemplateRequest(); // \OpenAPI\Client\Model\CreateGuildFromTemplateRequest

try {
    $result = $apiInstance->createGuildFromTemplate($code, $create_guild_from_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildFromTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **create_guild_from_template_request** | [**\OpenAPI\Client\Model\CreateGuildFromTemplateRequest**](../Model/CreateGuildFromTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildResponse**](../Model/GuildResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildRole()`

```php
createGuildRole($guild_id, $update_guild_role_request): \OpenAPI\Client\Model\GuildRoleResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$update_guild_role_request = new \OpenAPI\Client\Model\UpdateGuildRoleRequest(); // \OpenAPI\Client\Model\UpdateGuildRoleRequest

try {
    $result = $apiInstance->createGuildRole($guild_id, $update_guild_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **update_guild_role_request** | [**\OpenAPI\Client\Model\UpdateGuildRoleRequest**](../Model/UpdateGuildRoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildRoleResponse**](../Model/GuildRoleResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildScheduledEvent()`

```php
createGuildScheduledEvent($guild_id, $create_guild_scheduled_event_request): \OpenAPI\Client\Model\GetGuildScheduledEvent200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$create_guild_scheduled_event_request = new \OpenAPI\Client\Model\CreateGuildScheduledEventRequest(); // \OpenAPI\Client\Model\CreateGuildScheduledEventRequest

try {
    $result = $apiInstance->createGuildScheduledEvent($guild_id, $create_guild_scheduled_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **create_guild_scheduled_event_request** | [**\OpenAPI\Client\Model\CreateGuildScheduledEventRequest**](../Model/CreateGuildScheduledEventRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetGuildScheduledEvent200Response**](../Model/GetGuildScheduledEvent200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildSticker()`

```php
createGuildSticker($guild_id, $name, $tags, $file, $description): \OpenAPI\Client\Model\GuildStickerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$name = 'name_example'; // string
$tags = 'tags_example'; // string
$file = 'file_example'; // string
$description = 'description_example'; // string

try {
    $result = $apiInstance->createGuildSticker($guild_id, $name, $tags, $file, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **name** | **string**|  | |
| **tags** | **string**|  | |
| **file** | **string**|  | |
| **description** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuildStickerResponse**](../Model/GuildStickerResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuildTemplate()`

```php
createGuildTemplate($guild_id, $create_guild_template_request): \OpenAPI\Client\Model\GuildTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$create_guild_template_request = new \OpenAPI\Client\Model\CreateGuildTemplateRequest(); // \OpenAPI\Client\Model\CreateGuildTemplateRequest

try {
    $result = $apiInstance->createGuildTemplate($guild_id, $create_guild_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createGuildTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **create_guild_template_request** | [**\OpenAPI\Client\Model\CreateGuildTemplateRequest**](../Model/CreateGuildTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildTemplateResponse**](../Model/GuildTemplateResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInteractionResponse()`

```php
createInteractionResponse($interaction_id, $interaction_token, $create_interaction_response_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$interaction_id = 'interaction_id_example'; // string
$interaction_token = 'interaction_token_example'; // string
$create_interaction_response_request = new \OpenAPI\Client\Model\CreateInteractionResponseRequest(); // \OpenAPI\Client\Model\CreateInteractionResponseRequest

try {
    $apiInstance->createInteractionResponse($interaction_id, $interaction_token, $create_interaction_response_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createInteractionResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **interaction_id** | **string**|  | |
| **interaction_token** | **string**|  | |
| **create_interaction_response_request** | [**\OpenAPI\Client\Model\CreateInteractionResponseRequest**](../Model/CreateInteractionResponseRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMessage()`

```php
createMessage($channel_id, $message_create_request): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_create_request = new \OpenAPI\Client\Model\MessageCreateRequest(); // \OpenAPI\Client\Model\MessageCreateRequest

try {
    $result = $apiInstance->createMessage($channel_id, $message_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_create_request** | [**\OpenAPI\Client\Model\MessageCreateRequest**](../Model/MessageCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStageInstance()`

```php
createStageInstance($create_stage_instance_request): \OpenAPI\Client\Model\StageInstanceResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_stage_instance_request = new \OpenAPI\Client\Model\CreateStageInstanceRequest(); // \OpenAPI\Client\Model\CreateStageInstanceRequest

try {
    $result = $apiInstance->createStageInstance($create_stage_instance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createStageInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_stage_instance_request** | [**\OpenAPI\Client\Model\CreateStageInstanceRequest**](../Model/CreateStageInstanceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StageInstanceResponse**](../Model/StageInstanceResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createThread()`

```php
createThread($channel_id, $create_thread_request): \OpenAPI\Client\Model\CreatedThreadResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$create_thread_request = new \OpenAPI\Client\Model\CreateThreadRequest(); // \OpenAPI\Client\Model\CreateThreadRequest

try {
    $result = $apiInstance->createThread($channel_id, $create_thread_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **create_thread_request** | [**\OpenAPI\Client\Model\CreateThreadRequest**](../Model/CreateThreadRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatedThreadResponse**](../Model/CreatedThreadResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createThreadFromMessage()`

```php
createThreadFromMessage($channel_id, $message_id, $create_text_thread_with_message_request): \OpenAPI\Client\Model\ThreadResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$create_text_thread_with_message_request = new \OpenAPI\Client\Model\CreateTextThreadWithMessageRequest(); // \OpenAPI\Client\Model\CreateTextThreadWithMessageRequest

try {
    $result = $apiInstance->createThreadFromMessage($channel_id, $message_id, $create_text_thread_with_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createThreadFromMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **create_text_thread_with_message_request** | [**\OpenAPI\Client\Model\CreateTextThreadWithMessageRequest**](../Model/CreateTextThreadWithMessageRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ThreadResponse**](../Model/ThreadResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebhook()`

```php
createWebhook($channel_id, $create_webhook_request): \OpenAPI\Client\Model\GuildIncomingWebhookResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$create_webhook_request = new \OpenAPI\Client\Model\CreateWebhookRequest(); // \OpenAPI\Client\Model\CreateWebhookRequest

try {
    $result = $apiInstance->createWebhook($channel_id, $create_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **create_webhook_request** | [**\OpenAPI\Client\Model\CreateWebhookRequest**](../Model/CreateWebhookRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildIncomingWebhookResponse**](../Model/GuildIncomingWebhookResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crosspostMessage()`

```php
crosspostMessage($channel_id, $message_id): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->crosspostMessage($channel_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->crosspostMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllMessageReactions()`

```php
deleteAllMessageReactions($channel_id, $message_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string

try {
    $apiInstance->deleteAllMessageReactions($channel_id, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteAllMessageReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllMessageReactionsByEmoji()`

```php
deleteAllMessageReactionsByEmoji($channel_id, $message_id, $emoji_name)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$emoji_name = NULL; // mixed

try {
    $apiInstance->deleteAllMessageReactionsByEmoji($channel_id, $message_id, $emoji_name);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteAllMessageReactionsByEmoji: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **emoji_name** | [**mixed**](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationCommand()`

```php
deleteApplicationCommand($application_id, $command_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$command_id = 'command_id_example'; // string

try {
    $apiInstance->deleteApplicationCommand($application_id, $command_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **command_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutoModerationRule()`

```php
deleteAutoModerationRule($guild_id, $rule_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$rule_id = 'rule_id_example'; // string

try {
    $apiInstance->deleteAutoModerationRule($guild_id, $rule_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteAutoModerationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **rule_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChannel()`

```php
deleteChannel($channel_id): \OpenAPI\Client\Model\ListGuildChannels200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $result = $apiInstance->deleteChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListGuildChannels200ResponseInner**](../Model/ListGuildChannels200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChannelPermissionOverwrite()`

```php
deleteChannelPermissionOverwrite($channel_id, $overwrite_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$overwrite_id = 'overwrite_id_example'; // string

try {
    $apiInstance->deleteChannelPermissionOverwrite($channel_id, $overwrite_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteChannelPermissionOverwrite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **overwrite_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroupDmUser()`

```php
deleteGroupDmUser($channel_id, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $apiInstance->deleteGroupDmUser($channel_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGroupDmUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuild()`

```php
deleteGuild($guild_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $apiInstance->deleteGuild($guild_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildApplicationCommand()`

```php
deleteGuildApplicationCommand($application_id, $guild_id, $command_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$command_id = 'command_id_example'; // string

try {
    $apiInstance->deleteGuildApplicationCommand($application_id, $guild_id, $command_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **command_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildEmoji()`

```php
deleteGuildEmoji($guild_id, $emoji_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$emoji_id = 'emoji_id_example'; // string

try {
    $apiInstance->deleteGuildEmoji($guild_id, $emoji_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildEmoji: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **emoji_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildIntegration()`

```php
deleteGuildIntegration($guild_id, $integration_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$integration_id = 'integration_id_example'; // string

try {
    $apiInstance->deleteGuildIntegration($guild_id, $integration_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **integration_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildMember()`

```php
deleteGuildMember($guild_id, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $apiInstance->deleteGuildMember($guild_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildMemberRole()`

```php
deleteGuildMemberRole($guild_id, $user_id, $role_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$role_id = 'role_id_example'; // string

try {
    $apiInstance->deleteGuildMemberRole($guild_id, $user_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildMemberRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |
| **role_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildRole()`

```php
deleteGuildRole($guild_id, $role_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$role_id = 'role_id_example'; // string

try {
    $apiInstance->deleteGuildRole($guild_id, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **role_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildScheduledEvent()`

```php
deleteGuildScheduledEvent($guild_id, $guild_scheduled_event_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$guild_scheduled_event_id = 'guild_scheduled_event_id_example'; // string

try {
    $apiInstance->deleteGuildScheduledEvent($guild_id, $guild_scheduled_event_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **guild_scheduled_event_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildSticker()`

```php
deleteGuildSticker($guild_id, $sticker_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$sticker_id = 'sticker_id_example'; // string

try {
    $apiInstance->deleteGuildSticker($guild_id, $sticker_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **sticker_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuildTemplate()`

```php
deleteGuildTemplate($guild_id, $code): \OpenAPI\Client\Model\GuildTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$code = NULL; // mixed

try {
    $result = $apiInstance->deleteGuildTemplate($guild_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteGuildTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **code** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildTemplateResponse**](../Model/GuildTemplateResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMessage()`

```php
deleteMessage($channel_id, $message_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string

try {
    $apiInstance->deleteMessage($channel_id, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMyMessageReaction()`

```php
deleteMyMessageReaction($channel_id, $message_id, $emoji_name)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$emoji_name = 'emoji_name_example'; // string

try {
    $apiInstance->deleteMyMessageReaction($channel_id, $message_id, $emoji_name);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteMyMessageReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **emoji_name** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOriginalWebhookMessage()`

```php
deleteOriginalWebhookMessage($webhook_id, $webhook_token, $thread_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = 'webhook_token_example'; // string
$thread_id = 'thread_id_example'; // string

try {
    $apiInstance->deleteOriginalWebhookMessage($webhook_id, $webhook_token, $thread_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteOriginalWebhookMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | **string**|  | |
| **thread_id** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStageInstance()`

```php
deleteStageInstance($channel_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $apiInstance->deleteStageInstance($channel_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteStageInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteThreadMember()`

```php
deleteThreadMember($channel_id, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $apiInstance->deleteThreadMember($channel_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteThreadMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserMessageReaction()`

```php
deleteUserMessageReaction($channel_id, $message_id, $emoji_name, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$emoji_name = NULL; // mixed
$user_id = 'user_id_example'; // string

try {
    $apiInstance->deleteUserMessageReaction($channel_id, $message_id, $emoji_name, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteUserMessageReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **emoji_name** | [**mixed**](../Model/.md)|  | |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($webhook_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string

try {
    $apiInstance->deleteWebhook($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhookByToken()`

```php
deleteWebhookByToken($webhook_id, $webhook_token)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed

try {
    $apiInstance->deleteWebhookByToken($webhook_id, $webhook_token);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteWebhookByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhookMessage()`

```php
deleteWebhookMessage($webhook_id, $webhook_token, $message_id, $thread_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed
$message_id = 'message_id_example'; // string
$thread_id = 'thread_id_example'; // string

try {
    $apiInstance->deleteWebhookMessage($webhook_id, $webhook_token, $message_id, $thread_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->deleteWebhookMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |
| **message_id** | **string**|  | |
| **thread_id** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeGithubCompatibleWebhook()`

```php
executeGithubCompatibleWebhook($webhook_id, $webhook_token, $github_webhook, $wait, $thread_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed
$github_webhook = new \OpenAPI\Client\Model\GithubWebhook(); // \OpenAPI\Client\Model\GithubWebhook
$wait = True; // bool
$thread_id = 'thread_id_example'; // string

try {
    $apiInstance->executeGithubCompatibleWebhook($webhook_id, $webhook_token, $github_webhook, $wait, $thread_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->executeGithubCompatibleWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |
| **github_webhook** | [**\OpenAPI\Client\Model\GithubWebhook**](../Model/GithubWebhook.md)|  | |
| **wait** | **bool**|  | [optional] |
| **thread_id** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeSlackCompatibleWebhook()`

```php
executeSlackCompatibleWebhook($webhook_id, $webhook_token, $slack_webhook, $wait, $thread_id): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed
$slack_webhook = new \OpenAPI\Client\Model\SlackWebhook(); // \OpenAPI\Client\Model\SlackWebhook
$wait = True; // bool
$thread_id = 'thread_id_example'; // string

try {
    $result = $apiInstance->executeSlackCompatibleWebhook($webhook_id, $webhook_token, $slack_webhook, $wait, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->executeSlackCompatibleWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |
| **slack_webhook** | [**\OpenAPI\Client\Model\SlackWebhook**](../Model/SlackWebhook.md)|  | |
| **wait** | **bool**|  | [optional] |
| **thread_id** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeWebhook()`

```php
executeWebhook($webhook_id, $webhook_token, $execute_webhook_request, $wait, $thread_id): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed
$execute_webhook_request = new \OpenAPI\Client\Model\ExecuteWebhookRequest(); // \OpenAPI\Client\Model\ExecuteWebhookRequest
$wait = True; // bool
$thread_id = 'thread_id_example'; // string

try {
    $result = $apiInstance->executeWebhook($webhook_id, $webhook_token, $execute_webhook_request, $wait, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->executeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |
| **execute_webhook_request** | [**\OpenAPI\Client\Model\ExecuteWebhookRequest**](../Model/ExecuteWebhookRequest.md)|  | |
| **wait** | **bool**|  | [optional] |
| **thread_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followChannel()`

```php
followChannel($channel_id, $follow_channel_request): \OpenAPI\Client\Model\ChannelFollowerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$follow_channel_request = new \OpenAPI\Client\Model\FollowChannelRequest(); // \OpenAPI\Client\Model\FollowChannelRequest

try {
    $result = $apiInstance->followChannel($channel_id, $follow_channel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->followChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **follow_channel_request** | [**\OpenAPI\Client\Model\FollowChannelRequest**](../Model/FollowChannelRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ChannelFollowerResponse**](../Model/ChannelFollowerResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActiveGuildThreads()`

```php
getActiveGuildThreads($guild_id): \OpenAPI\Client\Model\ThreadsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getActiveGuildThreads($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getActiveGuildThreads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ThreadsResponse**](../Model/ThreadsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplication()`

```php
getApplication($application_id): \OpenAPI\Client\Model\PrivateApplicationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string

try {
    $result = $apiInstance->getApplication($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PrivateApplicationResponse**](../Model/PrivateApplicationResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationCommand()`

```php
getApplicationCommand($application_id, $command_id): \OpenAPI\Client\Model\ApplicationCommandResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$command_id = 'command_id_example'; // string

try {
    $result = $apiInstance->getApplicationCommand($application_id, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **command_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationRoleConnectionsMetadata()`

```php
getApplicationRoleConnectionsMetadata($application_id): \OpenAPI\Client\Model\ApplicationRoleConnectionsMetadataItemResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string

try {
    $result = $apiInstance->getApplicationRoleConnectionsMetadata($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getApplicationRoleConnectionsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationRoleConnectionsMetadataItemResponse[]**](../Model/ApplicationRoleConnectionsMetadataItemResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationUserRoleConnection()`

```php
getApplicationUserRoleConnection($application_id): \OpenAPI\Client\Model\ApplicationUserRoleConnectionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string

try {
    $result = $apiInstance->getApplicationUserRoleConnection($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getApplicationUserRoleConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationUserRoleConnectionResponse**](../Model/ApplicationUserRoleConnectionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoModerationRule()`

```php
getAutoModerationRule($guild_id, $rule_id): \OpenAPI\Client\Model\GetAutoModerationRule200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$rule_id = 'rule_id_example'; // string

try {
    $result = $apiInstance->getAutoModerationRule($guild_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getAutoModerationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **rule_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetAutoModerationRule200Response**](../Model/GetAutoModerationRule200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBotGateway()`

```php
getBotGateway(): \OpenAPI\Client\Model\GatewayBotResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBotGateway();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getBotGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GatewayBotResponse**](../Model/GatewayBotResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannel()`

```php
getChannel($channel_id): \OpenAPI\Client\Model\ListGuildChannels200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $result = $apiInstance->getChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListGuildChannels200ResponseInner**](../Model/ListGuildChannels200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGateway()`

```php
getGateway(): \OpenAPI\Client\Model\GatewayResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGateway();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GatewayResponse**](../Model/GatewayResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuild()`

```php
getGuild($guild_id, $with_counts): \OpenAPI\Client\Model\GuildWithCountsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$with_counts = True; // bool

try {
    $result = $apiInstance->getGuild($guild_id, $with_counts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **with_counts** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuildWithCountsResponse**](../Model/GuildWithCountsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildApplicationCommand()`

```php
getGuildApplicationCommand($application_id, $guild_id, $command_id): \OpenAPI\Client\Model\ApplicationCommandResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$command_id = 'command_id_example'; // string

try {
    $result = $apiInstance->getGuildApplicationCommand($application_id, $guild_id, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **command_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildApplicationCommandPermissions()`

```php
getGuildApplicationCommandPermissions($application_id, $guild_id, $command_id): \OpenAPI\Client\Model\CommandPermissionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$command_id = 'command_id_example'; // string

try {
    $result = $apiInstance->getGuildApplicationCommandPermissions($application_id, $guild_id, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildApplicationCommandPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **command_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CommandPermissionsResponse**](../Model/CommandPermissionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildBan()`

```php
getGuildBan($guild_id, $user_id): \OpenAPI\Client\Model\GuildBanResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getGuildBan($guild_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildBan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildBanResponse**](../Model/GuildBanResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildEmoji()`

```php
getGuildEmoji($guild_id, $emoji_id): \OpenAPI\Client\Model\EmojiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$emoji_id = 'emoji_id_example'; // string

try {
    $result = $apiInstance->getGuildEmoji($guild_id, $emoji_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildEmoji: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **emoji_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EmojiResponse**](../Model/EmojiResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildMember()`

```php
getGuildMember($guild_id, $user_id): \OpenAPI\Client\Model\GuildMemberResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getGuildMember($guild_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildMemberResponse**](../Model/GuildMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildNewMemberWelcome()`

```php
getGuildNewMemberWelcome($guild_id): \OpenAPI\Client\Model\GuildHomeSettingsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildNewMemberWelcome($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildNewMemberWelcome: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildHomeSettingsResponse**](../Model/GuildHomeSettingsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildPreview()`

```php
getGuildPreview($guild_id): \OpenAPI\Client\Model\GuildPreviewResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildPreview($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildPreviewResponse**](../Model/GuildPreviewResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildScheduledEvent()`

```php
getGuildScheduledEvent($guild_id, $guild_scheduled_event_id, $with_user_count): \OpenAPI\Client\Model\GetGuildScheduledEvent200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$guild_scheduled_event_id = 'guild_scheduled_event_id_example'; // string
$with_user_count = True; // bool

try {
    $result = $apiInstance->getGuildScheduledEvent($guild_id, $guild_scheduled_event_id, $with_user_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **guild_scheduled_event_id** | **string**|  | |
| **with_user_count** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetGuildScheduledEvent200Response**](../Model/GetGuildScheduledEvent200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildSticker()`

```php
getGuildSticker($guild_id, $sticker_id): \OpenAPI\Client\Model\GuildStickerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$sticker_id = 'sticker_id_example'; // string

try {
    $result = $apiInstance->getGuildSticker($guild_id, $sticker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **sticker_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildStickerResponse**](../Model/GuildStickerResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildTemplate()`

```php
getGuildTemplate($code): \OpenAPI\Client\Model\GuildTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->getGuildTemplate($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildTemplateResponse**](../Model/GuildTemplateResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildVanityUrl()`

```php
getGuildVanityUrl($guild_id): \OpenAPI\Client\Model\VanityURLResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildVanityUrl($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildVanityUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VanityURLResponse**](../Model/VanityURLResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildWebhooks()`

```php
getGuildWebhooks($guild_id): \OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildWebhooks($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner[]**](../Model/ListChannelWebhooks200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildWelcomeScreen()`

```php
getGuildWelcomeScreen($guild_id): \OpenAPI\Client\Model\GuildWelcomeScreenResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildWelcomeScreen($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildWelcomeScreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildWelcomeScreenResponse**](../Model/GuildWelcomeScreenResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildWidget()`

```php
getGuildWidget($guild_id): \OpenAPI\Client\Model\WidgetResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildWidget($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildWidget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WidgetResponse**](../Model/WidgetResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildWidgetPng()`

```php
getGuildWidgetPng($guild_id, $style): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$style = new \OpenAPI\Client\Model\WidgetImageStyles(); // WidgetImageStyles

try {
    $result = $apiInstance->getGuildWidgetPng($guild_id, $style);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildWidgetPng: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **style** | [**WidgetImageStyles**](../Model/.md)|  | [optional] |

### Return type

**string**

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildWidgetSettings()`

```php
getGuildWidgetSettings($guild_id): \OpenAPI\Client\Model\WidgetSettingsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildWidgetSettings($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildWidgetSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WidgetSettingsResponse**](../Model/WidgetSettingsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuildsOnboarding()`

```php
getGuildsOnboarding($guild_id): \OpenAPI\Client\Model\UserGuildOnboardingResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getGuildsOnboarding($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getGuildsOnboarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UserGuildOnboardingResponse**](../Model/UserGuildOnboardingResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessage()`

```php
getMessage($channel_id, $message_id): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->getMessage($channel_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyApplication()`

```php
getMyApplication(): \OpenAPI\Client\Model\PrivateApplicationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyApplication();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getMyApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PrivateApplicationResponse**](../Model/PrivateApplicationResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyGuildMember()`

```php
getMyGuildMember($guild_id): \OpenAPI\Client\Model\PrivateGuildMemberResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->getMyGuildMember($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getMyGuildMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PrivateGuildMemberResponse**](../Model/PrivateGuildMemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyOauth2Application()`

```php
getMyOauth2Application(): \OpenAPI\Client\Model\PrivateApplicationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyOauth2Application();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getMyOauth2Application: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PrivateApplicationResponse**](../Model/PrivateApplicationResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyOauth2Authorization()`

```php
getMyOauth2Authorization(): \OpenAPI\Client\Model\OAuth2GetAuthorizationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyOauth2Authorization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getMyOauth2Authorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OAuth2GetAuthorizationResponse**](../Model/OAuth2GetAuthorizationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyUser()`

```php
getMyUser(): \OpenAPI\Client\Model\UserPIIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getMyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UserPIIResponse**](../Model/UserPIIResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOriginalWebhookMessage()`

```php
getOriginalWebhookMessage($webhook_id, $webhook_token, $thread_id): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = 'webhook_token_example'; // string
$thread_id = 'thread_id_example'; // string

try {
    $result = $apiInstance->getOriginalWebhookMessage($webhook_id, $webhook_token, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getOriginalWebhookMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | **string**|  | |
| **thread_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStageInstance()`

```php
getStageInstance($channel_id): \OpenAPI\Client\Model\StageInstanceResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $result = $apiInstance->getStageInstance($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getStageInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\StageInstanceResponse**](../Model/StageInstanceResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSticker()`

```php
getSticker($sticker_id): \OpenAPI\Client\Model\GetSticker200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sticker_id = 'sticker_id_example'; // string

try {
    $result = $apiInstance->getSticker($sticker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sticker_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetSticker200Response**](../Model/GetSticker200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThreadMember()`

```php
getThreadMember($channel_id, $user_id, $with_member): \OpenAPI\Client\Model\ThreadMemberResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$user_id = 'user_id_example'; // string
$with_member = True; // bool

try {
    $result = $apiInstance->getThreadMember($channel_id, $user_id, $with_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getThreadMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **user_id** | **string**|  | |
| **with_member** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ThreadMemberResponse**](../Model/ThreadMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($user_id): \OpenAPI\Client\Model\UserResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($webhook_id): \OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string

try {
    $result = $apiInstance->getWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner**](../Model/ListChannelWebhooks200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookByToken()`

```php
getWebhookByToken($webhook_id, $webhook_token): \OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed

try {
    $result = $apiInstance->getWebhookByToken($webhook_id, $webhook_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getWebhookByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner**](../Model/ListChannelWebhooks200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookMessage()`

```php
getWebhookMessage($webhook_id, $webhook_token, $message_id, $thread_id): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed
$message_id = 'message_id_example'; // string
$thread_id = 'thread_id_example'; // string

try {
    $result = $apiInstance->getWebhookMessage($webhook_id, $webhook_token, $message_id, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->getWebhookMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |
| **message_id** | **string**|  | |
| **thread_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteResolve()`

```php
inviteResolve($code, $with_counts, $guild_scheduled_event_id): \OpenAPI\Client\Model\ListChannelInvites200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = NULL; // mixed
$with_counts = True; // bool
$guild_scheduled_event_id = 'guild_scheduled_event_id_example'; // string

try {
    $result = $apiInstance->inviteResolve($code, $with_counts, $guild_scheduled_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->inviteResolve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | [**mixed**](../Model/.md)|  | |
| **with_counts** | **bool**|  | [optional] |
| **guild_scheduled_event_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListChannelInvites200ResponseInner**](../Model/ListChannelInvites200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteRevoke()`

```php
inviteRevoke($code): \OpenAPI\Client\Model\ListChannelInvites200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = NULL; // mixed

try {
    $result = $apiInstance->inviteRevoke($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->inviteRevoke: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelInvites200ResponseInner**](../Model/ListChannelInvites200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `joinThread()`

```php
joinThread($channel_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $apiInstance->joinThread($channel_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->joinThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveGuild()`

```php
leaveGuild($guild_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $apiInstance->leaveGuild($guild_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->leaveGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveThread()`

```php
leaveThread($channel_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $apiInstance->leaveThread($channel_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->leaveThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApplicationCommands()`

```php
listApplicationCommands($application_id, $with_localizations): \OpenAPI\Client\Model\ApplicationCommandResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$with_localizations = True; // bool

try {
    $result = $apiInstance->listApplicationCommands($application_id, $with_localizations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listApplicationCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **with_localizations** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse[]**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutoModerationRules()`

```php
listAutoModerationRules($guild_id): \OpenAPI\Client\Model\ListAutoModerationRules200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listAutoModerationRules($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listAutoModerationRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListAutoModerationRules200ResponseInner[]**](../Model/ListAutoModerationRules200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listChannelInvites()`

```php
listChannelInvites($channel_id): \OpenAPI\Client\Model\ListChannelInvites200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $result = $apiInstance->listChannelInvites($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listChannelInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelInvites200ResponseInner[]**](../Model/ListChannelInvites200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listChannelWebhooks()`

```php
listChannelWebhooks($channel_id): \OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $result = $apiInstance->listChannelWebhooks($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listChannelWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner[]**](../Model/ListChannelWebhooks200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildApplicationCommandPermissions()`

```php
listGuildApplicationCommandPermissions($application_id, $guild_id): \OpenAPI\Client\Model\CommandPermissionsResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildApplicationCommandPermissions($application_id, $guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildApplicationCommandPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CommandPermissionsResponse[]**](../Model/CommandPermissionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildApplicationCommands()`

```php
listGuildApplicationCommands($application_id, $guild_id, $with_localizations): \OpenAPI\Client\Model\ApplicationCommandResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$with_localizations = True; // bool

try {
    $result = $apiInstance->listGuildApplicationCommands($application_id, $guild_id, $with_localizations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildApplicationCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **with_localizations** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse[]**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildAuditLogEntries()`

```php
listGuildAuditLogEntries($guild_id, $user_id, $action_type, $before, $after, $limit): \OpenAPI\Client\Model\GuildAuditLogResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$action_type = 56; // int
$before = 'before_example'; // string
$after = 'after_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listGuildAuditLogEntries($guild_id, $user_id, $action_type, $before, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildAuditLogEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **action_type** | **int**|  | [optional] |
| **before** | **string**|  | [optional] |
| **after** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuildAuditLogResponse**](../Model/GuildAuditLogResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildBans()`

```php
listGuildBans($guild_id, $limit, $before, $after): \OpenAPI\Client\Model\GuildBanResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$limit = 56; // int
$before = 'before_example'; // string
$after = 'after_example'; // string

try {
    $result = $apiInstance->listGuildBans($guild_id, $limit, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildBans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **before** | **string**|  | [optional] |
| **after** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuildBanResponse[]**](../Model/GuildBanResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildChannels()`

```php
listGuildChannels($guild_id): \OpenAPI\Client\Model\ListGuildChannels200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildChannels($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListGuildChannels200ResponseInner[]**](../Model/ListGuildChannels200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildEmojis()`

```php
listGuildEmojis($guild_id): \OpenAPI\Client\Model\EmojiResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildEmojis($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildEmojis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EmojiResponse[]**](../Model/EmojiResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildIntegrations()`

```php
listGuildIntegrations($guild_id): \OpenAPI\Client\Model\ListGuildIntegrations200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildIntegrations($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListGuildIntegrations200ResponseInner[]**](../Model/ListGuildIntegrations200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildInvites()`

```php
listGuildInvites($guild_id): \OpenAPI\Client\Model\ListChannelInvites200ResponseInner[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildInvites($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelInvites200ResponseInner[]**](../Model/ListChannelInvites200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildMembers()`

```php
listGuildMembers($guild_id, $limit, $after): \OpenAPI\Client\Model\GuildMemberResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$limit = 56; // int
$after = 56; // int

try {
    $result = $apiInstance->listGuildMembers($guild_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **after** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuildMemberResponse[]**](../Model/GuildMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildRoles()`

```php
listGuildRoles($guild_id): \OpenAPI\Client\Model\GuildRoleResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildRoles($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildRoleResponse[]**](../Model/GuildRoleResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildScheduledEventUsers()`

```php
listGuildScheduledEventUsers($guild_id, $guild_scheduled_event_id, $with_member, $limit, $before, $after): \OpenAPI\Client\Model\ScheduledEventUserResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$guild_scheduled_event_id = 'guild_scheduled_event_id_example'; // string
$with_member = True; // bool
$limit = 56; // int
$before = 'before_example'; // string
$after = 'after_example'; // string

try {
    $result = $apiInstance->listGuildScheduledEventUsers($guild_id, $guild_scheduled_event_id, $with_member, $limit, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildScheduledEventUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **guild_scheduled_event_id** | **string**|  | |
| **with_member** | **bool**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **before** | **string**|  | [optional] |
| **after** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ScheduledEventUserResponse[]**](../Model/ScheduledEventUserResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildScheduledEvents()`

```php
listGuildScheduledEvents($guild_id, $with_user_count): \OpenAPI\Client\Model\GetGuildScheduledEvent200Response[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$with_user_count = True; // bool

try {
    $result = $apiInstance->listGuildScheduledEvents($guild_id, $with_user_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildScheduledEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **with_user_count** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetGuildScheduledEvent200Response[]**](../Model/GetGuildScheduledEvent200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildStickers()`

```php
listGuildStickers($guild_id): \OpenAPI\Client\Model\GuildStickerResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildStickers($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildStickers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildStickerResponse[]**](../Model/GuildStickerResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildTemplates()`

```php
listGuildTemplates($guild_id): \OpenAPI\Client\Model\GuildTemplateResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildTemplates($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildTemplateResponse[]**](../Model/GuildTemplateResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuildVoiceRegions()`

```php
listGuildVoiceRegions($guild_id): \OpenAPI\Client\Model\VoiceRegionResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->listGuildVoiceRegions($guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listGuildVoiceRegions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VoiceRegionResponse[]**](../Model/VoiceRegionResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMessageReactionsByEmoji()`

```php
listMessageReactionsByEmoji($channel_id, $message_id, $emoji_name, $after, $limit): \OpenAPI\Client\Model\UserResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$emoji_name = NULL; // mixed
$after = 'after_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listMessageReactionsByEmoji($channel_id, $message_id, $emoji_name, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listMessageReactionsByEmoji: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **emoji_name** | [**mixed**](../Model/.md)|  | |
| **after** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserResponse[]**](../Model/UserResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMessages()`

```php
listMessages($channel_id, $around, $before, $after, $limit): \OpenAPI\Client\Model\MessageResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$around = 'around_example'; // string
$before = 'before_example'; // string
$after = 'after_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listMessages($channel_id, $around, $before, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **around** | **string**|  | [optional] |
| **before** | **string**|  | [optional] |
| **after** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessageResponse[]**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMyConnections()`

```php
listMyConnections(): \OpenAPI\Client\Model\ConnectedAccountResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMyConnections();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listMyConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ConnectedAccountResponse[]**](../Model/ConnectedAccountResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMyGuilds()`

```php
listMyGuilds($before, $after, $limit, $with_counts): \OpenAPI\Client\Model\MyGuildResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$before = 'before_example'; // string
$after = 'after_example'; // string
$limit = 56; // int
$with_counts = True; // bool

try {
    $result = $apiInstance->listMyGuilds($before, $after, $limit, $with_counts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listMyGuilds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **before** | **string**|  | [optional] |
| **after** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **with_counts** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MyGuildResponse[]**](../Model/MyGuildResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMyPrivateArchivedThreads()`

```php
listMyPrivateArchivedThreads($channel_id, $before, $limit): \OpenAPI\Client\Model\ThreadsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$before = 'before_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listMyPrivateArchivedThreads($channel_id, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listMyPrivateArchivedThreads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **before** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ThreadsResponse**](../Model/ThreadsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPinnedMessages()`

```php
listPinnedMessages($channel_id): \OpenAPI\Client\Model\MessageResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $result = $apiInstance->listPinnedMessages($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listPinnedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MessageResponse[]**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPrivateArchivedThreads()`

```php
listPrivateArchivedThreads($channel_id, $before, $limit): \OpenAPI\Client\Model\ThreadsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$limit = 56; // int

try {
    $result = $apiInstance->listPrivateArchivedThreads($channel_id, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listPrivateArchivedThreads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **before** | **\DateTime**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ThreadsResponse**](../Model/ThreadsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPublicArchivedThreads()`

```php
listPublicArchivedThreads($channel_id, $before, $limit): \OpenAPI\Client\Model\ThreadsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$limit = 56; // int

try {
    $result = $apiInstance->listPublicArchivedThreads($channel_id, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listPublicArchivedThreads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **before** | **\DateTime**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ThreadsResponse**](../Model/ThreadsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStickerPacks()`

```php
listStickerPacks(): \OpenAPI\Client\Model\StickerPackCollectionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listStickerPacks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listStickerPacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\StickerPackCollectionResponse**](../Model/StickerPackCollectionResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listThreadMembers()`

```php
listThreadMembers($channel_id, $with_member, $limit, $after): \OpenAPI\Client\Model\ThreadMemberResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$with_member = True; // bool
$limit = 56; // int
$after = 'after_example'; // string

try {
    $result = $apiInstance->listThreadMembers($channel_id, $with_member, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listThreadMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **with_member** | **bool**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **after** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ThreadMemberResponse[]**](../Model/ThreadMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoiceRegions()`

```php
listVoiceRegions(): \OpenAPI\Client\Model\VoiceRegionResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listVoiceRegions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->listVoiceRegions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\VoiceRegionResponse[]**](../Model/VoiceRegionResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pinMessage()`

```php
pinMessage($channel_id, $message_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string

try {
    $apiInstance->pinMessage($channel_id, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->pinMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewPruneGuild()`

```php
previewPruneGuild($guild_id, $days, $include_roles): \OpenAPI\Client\Model\GuildPruneResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$days = 56; // int
$include_roles = 'include_roles_example'; // string

try {
    $result = $apiInstance->previewPruneGuild($guild_id, $days, $include_roles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->previewPruneGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **days** | **int**|  | [optional] |
| **include_roles** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GuildPruneResponse**](../Model/GuildPruneResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pruneGuild()`

```php
pruneGuild($guild_id, $prune_guild_request): \OpenAPI\Client\Model\GuildPruneResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$prune_guild_request = new \OpenAPI\Client\Model\PruneGuildRequest(); // \OpenAPI\Client\Model\PruneGuildRequest

try {
    $result = $apiInstance->pruneGuild($guild_id, $prune_guild_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->pruneGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **prune_guild_request** | [**\OpenAPI\Client\Model\PruneGuildRequest**](../Model/PruneGuildRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildPruneResponse**](../Model/GuildPruneResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putGuildsOnboarding()`

```php
putGuildsOnboarding($guild_id, $update_guild_onboarding_request): \OpenAPI\Client\Model\GuildOnboardingResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$update_guild_onboarding_request = new \OpenAPI\Client\Model\UpdateGuildOnboardingRequest(); // \OpenAPI\Client\Model\UpdateGuildOnboardingRequest

try {
    $result = $apiInstance->putGuildsOnboarding($guild_id, $update_guild_onboarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->putGuildsOnboarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **update_guild_onboarding_request** | [**\OpenAPI\Client\Model\UpdateGuildOnboardingRequest**](../Model/UpdateGuildOnboardingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildOnboardingResponse**](../Model/GuildOnboardingResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchGuildMembers()`

```php
searchGuildMembers($limit, $query, $guild_id): \OpenAPI\Client\Model\GuildMemberResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$query = 'query_example'; // string
$guild_id = 'guild_id_example'; // string

try {
    $result = $apiInstance->searchGuildMembers($limit, $query, $guild_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->searchGuildMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | |
| **query** | **string**|  | |
| **guild_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GuildMemberResponse[]**](../Model/GuildMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setChannelPermissionOverwrite()`

```php
setChannelPermissionOverwrite($channel_id, $overwrite_id, $set_channel_permission_overwrite_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$overwrite_id = 'overwrite_id_example'; // string
$set_channel_permission_overwrite_request = new \OpenAPI\Client\Model\SetChannelPermissionOverwriteRequest(); // \OpenAPI\Client\Model\SetChannelPermissionOverwriteRequest

try {
    $apiInstance->setChannelPermissionOverwrite($channel_id, $overwrite_id, $set_channel_permission_overwrite_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->setChannelPermissionOverwrite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **overwrite_id** | **string**|  | |
| **set_channel_permission_overwrite_request** | [**\OpenAPI\Client\Model\SetChannelPermissionOverwriteRequest**](../Model/SetChannelPermissionOverwriteRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setGuildApplicationCommandPermissions()`

```php
setGuildApplicationCommandPermissions($application_id, $guild_id, $command_id, $set_guild_application_command_permissions_request): \OpenAPI\Client\Model\CommandPermissionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$command_id = 'command_id_example'; // string
$set_guild_application_command_permissions_request = new \OpenAPI\Client\Model\SetGuildApplicationCommandPermissionsRequest(); // \OpenAPI\Client\Model\SetGuildApplicationCommandPermissionsRequest

try {
    $result = $apiInstance->setGuildApplicationCommandPermissions($application_id, $guild_id, $command_id, $set_guild_application_command_permissions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->setGuildApplicationCommandPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **command_id** | **string**|  | |
| **set_guild_application_command_permissions_request** | [**\OpenAPI\Client\Model\SetGuildApplicationCommandPermissionsRequest**](../Model/SetGuildApplicationCommandPermissionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommandPermissionsResponse**](../Model/CommandPermissionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setGuildMfaLevel()`

```php
setGuildMfaLevel($guild_id, $set_guild_mfa_level_request): \OpenAPI\Client\Model\GuildMFALevelResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$set_guild_mfa_level_request = new \OpenAPI\Client\Model\SetGuildMfaLevelRequest(); // \OpenAPI\Client\Model\SetGuildMfaLevelRequest

try {
    $result = $apiInstance->setGuildMfaLevel($guild_id, $set_guild_mfa_level_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->setGuildMfaLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **set_guild_mfa_level_request** | [**\OpenAPI\Client\Model\SetGuildMfaLevelRequest**](../Model/SetGuildMfaLevelRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildMFALevelResponse**](../Model/GuildMFALevelResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncGuildTemplate()`

```php
syncGuildTemplate($guild_id, $code): \OpenAPI\Client\Model\GuildTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$code = NULL; // mixed

try {
    $result = $apiInstance->syncGuildTemplate($guild_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->syncGuildTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **code** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildTemplateResponse**](../Model/GuildTemplateResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerTypingIndicator()`

```php
triggerTypingIndicator($channel_id): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string

try {
    $result = $apiInstance->triggerTypingIndicator($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->triggerTypingIndicator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |

### Return type

**object**

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unbanUserFromGuild()`

```php
unbanUserFromGuild($guild_id, $user_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $apiInstance->unbanUserFromGuild($guild_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->unbanUserFromGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpinMessage()`

```php
unpinMessage($channel_id, $message_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string

try {
    $apiInstance->unpinMessage($channel_id, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->unpinMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApplication()`

```php
updateApplication($application_id, $application_form_partial): \OpenAPI\Client\Model\PrivateApplicationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$application_form_partial = new \OpenAPI\Client\Model\ApplicationFormPartial(); // \OpenAPI\Client\Model\ApplicationFormPartial

try {
    $result = $apiInstance->updateApplication($application_id, $application_form_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **application_form_partial** | [**\OpenAPI\Client\Model\ApplicationFormPartial**](../Model/ApplicationFormPartial.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PrivateApplicationResponse**](../Model/PrivateApplicationResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApplicationCommand()`

```php
updateApplicationCommand($application_id, $command_id, $application_command_patch_request_partial): \OpenAPI\Client\Model\ApplicationCommandResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$command_id = 'command_id_example'; // string
$application_command_patch_request_partial = new \OpenAPI\Client\Model\ApplicationCommandPatchRequestPartial(); // \OpenAPI\Client\Model\ApplicationCommandPatchRequestPartial

try {
    $result = $apiInstance->updateApplicationCommand($application_id, $command_id, $application_command_patch_request_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **command_id** | **string**|  | |
| **application_command_patch_request_partial** | [**\OpenAPI\Client\Model\ApplicationCommandPatchRequestPartial**](../Model/ApplicationCommandPatchRequestPartial.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApplicationRoleConnectionsMetadata()`

```php
updateApplicationRoleConnectionsMetadata($application_id, $application_role_connections_metadata_item_request): \OpenAPI\Client\Model\ApplicationRoleConnectionsMetadataItemResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$application_role_connections_metadata_item_request = array(new \OpenAPI\Client\Model\ApplicationRoleConnectionsMetadataItemRequest()); // \OpenAPI\Client\Model\ApplicationRoleConnectionsMetadataItemRequest[]

try {
    $result = $apiInstance->updateApplicationRoleConnectionsMetadata($application_id, $application_role_connections_metadata_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateApplicationRoleConnectionsMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **application_role_connections_metadata_item_request** | [**\OpenAPI\Client\Model\ApplicationRoleConnectionsMetadataItemRequest[]**](../Model/ApplicationRoleConnectionsMetadataItemRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationRoleConnectionsMetadataItemResponse[]**](../Model/ApplicationRoleConnectionsMetadataItemResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApplicationUserRoleConnection()`

```php
updateApplicationUserRoleConnection($application_id, $update_application_user_role_connection_request): \OpenAPI\Client\Model\ApplicationUserRoleConnectionResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$update_application_user_role_connection_request = new \OpenAPI\Client\Model\UpdateApplicationUserRoleConnectionRequest(); // \OpenAPI\Client\Model\UpdateApplicationUserRoleConnectionRequest

try {
    $result = $apiInstance->updateApplicationUserRoleConnection($application_id, $update_application_user_role_connection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateApplicationUserRoleConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **update_application_user_role_connection_request** | [**\OpenAPI\Client\Model\UpdateApplicationUserRoleConnectionRequest**](../Model/UpdateApplicationUserRoleConnectionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationUserRoleConnectionResponse**](../Model/ApplicationUserRoleConnectionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoModerationRule()`

```php
updateAutoModerationRule($guild_id, $rule_id, $update_auto_moderation_rule_request): \OpenAPI\Client\Model\GetAutoModerationRule200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$rule_id = 'rule_id_example'; // string
$update_auto_moderation_rule_request = new \OpenAPI\Client\Model\UpdateAutoModerationRuleRequest(); // \OpenAPI\Client\Model\UpdateAutoModerationRuleRequest

try {
    $result = $apiInstance->updateAutoModerationRule($guild_id, $rule_id, $update_auto_moderation_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateAutoModerationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **rule_id** | **string**|  | |
| **update_auto_moderation_rule_request** | [**\OpenAPI\Client\Model\UpdateAutoModerationRuleRequest**](../Model/UpdateAutoModerationRuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetAutoModerationRule200Response**](../Model/GetAutoModerationRule200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannel()`

```php
updateChannel($channel_id, $update_channel_request): \OpenAPI\Client\Model\ListGuildChannels200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$update_channel_request = new \OpenAPI\Client\Model\UpdateChannelRequest(); // \OpenAPI\Client\Model\UpdateChannelRequest

try {
    $result = $apiInstance->updateChannel($channel_id, $update_channel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **update_channel_request** | [**\OpenAPI\Client\Model\UpdateChannelRequest**](../Model/UpdateChannelRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ListGuildChannels200ResponseInner**](../Model/ListGuildChannels200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuild()`

```php
updateGuild($guild_id, $guild_patch_request_partial): \OpenAPI\Client\Model\GuildResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$guild_patch_request_partial = new \OpenAPI\Client\Model\GuildPatchRequestPartial(); // \OpenAPI\Client\Model\GuildPatchRequestPartial

try {
    $result = $apiInstance->updateGuild($guild_id, $guild_patch_request_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **guild_patch_request_partial** | [**\OpenAPI\Client\Model\GuildPatchRequestPartial**](../Model/GuildPatchRequestPartial.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildResponse**](../Model/GuildResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildApplicationCommand()`

```php
updateGuildApplicationCommand($application_id, $guild_id, $command_id, $application_command_patch_request_partial): \OpenAPI\Client\Model\ApplicationCommandResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 'application_id_example'; // string
$guild_id = 'guild_id_example'; // string
$command_id = 'command_id_example'; // string
$application_command_patch_request_partial = new \OpenAPI\Client\Model\ApplicationCommandPatchRequestPartial(); // \OpenAPI\Client\Model\ApplicationCommandPatchRequestPartial

try {
    $result = $apiInstance->updateGuildApplicationCommand($application_id, $guild_id, $command_id, $application_command_patch_request_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildApplicationCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**|  | |
| **guild_id** | **string**|  | |
| **command_id** | **string**|  | |
| **application_command_patch_request_partial** | [**\OpenAPI\Client\Model\ApplicationCommandPatchRequestPartial**](../Model/ApplicationCommandPatchRequestPartial.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApplicationCommandResponse**](../Model/ApplicationCommandResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [OAuth2](../../README.md#OAuth2), [BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildEmoji()`

```php
updateGuildEmoji($guild_id, $emoji_id, $update_guild_emoji_request): \OpenAPI\Client\Model\EmojiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$emoji_id = 'emoji_id_example'; // string
$update_guild_emoji_request = new \OpenAPI\Client\Model\UpdateGuildEmojiRequest(); // \OpenAPI\Client\Model\UpdateGuildEmojiRequest

try {
    $result = $apiInstance->updateGuildEmoji($guild_id, $emoji_id, $update_guild_emoji_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildEmoji: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **emoji_id** | **string**|  | |
| **update_guild_emoji_request** | [**\OpenAPI\Client\Model\UpdateGuildEmojiRequest**](../Model/UpdateGuildEmojiRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmojiResponse**](../Model/EmojiResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildMember()`

```php
updateGuildMember($guild_id, $user_id, $update_guild_member_request): \OpenAPI\Client\Model\GuildMemberResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$update_guild_member_request = new \OpenAPI\Client\Model\UpdateGuildMemberRequest(); // \OpenAPI\Client\Model\UpdateGuildMemberRequest

try {
    $result = $apiInstance->updateGuildMember($guild_id, $user_id, $update_guild_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |
| **update_guild_member_request** | [**\OpenAPI\Client\Model\UpdateGuildMemberRequest**](../Model/UpdateGuildMemberRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildMemberResponse**](../Model/GuildMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildRole()`

```php
updateGuildRole($guild_id, $role_id, $update_guild_role_request): \OpenAPI\Client\Model\GuildRoleResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$role_id = 'role_id_example'; // string
$update_guild_role_request = new \OpenAPI\Client\Model\UpdateGuildRoleRequest(); // \OpenAPI\Client\Model\UpdateGuildRoleRequest

try {
    $result = $apiInstance->updateGuildRole($guild_id, $role_id, $update_guild_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **role_id** | **string**|  | |
| **update_guild_role_request** | [**\OpenAPI\Client\Model\UpdateGuildRoleRequest**](../Model/UpdateGuildRoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildRoleResponse**](../Model/GuildRoleResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildScheduledEvent()`

```php
updateGuildScheduledEvent($guild_id, $guild_scheduled_event_id, $update_guild_scheduled_event_request): \OpenAPI\Client\Model\GetGuildScheduledEvent200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$guild_scheduled_event_id = 'guild_scheduled_event_id_example'; // string
$update_guild_scheduled_event_request = new \OpenAPI\Client\Model\UpdateGuildScheduledEventRequest(); // \OpenAPI\Client\Model\UpdateGuildScheduledEventRequest

try {
    $result = $apiInstance->updateGuildScheduledEvent($guild_id, $guild_scheduled_event_id, $update_guild_scheduled_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **guild_scheduled_event_id** | **string**|  | |
| **update_guild_scheduled_event_request** | [**\OpenAPI\Client\Model\UpdateGuildScheduledEventRequest**](../Model/UpdateGuildScheduledEventRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetGuildScheduledEvent200Response**](../Model/GetGuildScheduledEvent200Response.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildSticker()`

```php
updateGuildSticker($guild_id, $sticker_id, $update_guild_sticker_request): \OpenAPI\Client\Model\GuildStickerResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$sticker_id = 'sticker_id_example'; // string
$update_guild_sticker_request = new \OpenAPI\Client\Model\UpdateGuildStickerRequest(); // \OpenAPI\Client\Model\UpdateGuildStickerRequest

try {
    $result = $apiInstance->updateGuildSticker($guild_id, $sticker_id, $update_guild_sticker_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildSticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **sticker_id** | **string**|  | |
| **update_guild_sticker_request** | [**\OpenAPI\Client\Model\UpdateGuildStickerRequest**](../Model/UpdateGuildStickerRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildStickerResponse**](../Model/GuildStickerResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildTemplate()`

```php
updateGuildTemplate($guild_id, $code, $update_guild_template_request): \OpenAPI\Client\Model\GuildTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$code = NULL; // mixed
$update_guild_template_request = new \OpenAPI\Client\Model\UpdateGuildTemplateRequest(); // \OpenAPI\Client\Model\UpdateGuildTemplateRequest

try {
    $result = $apiInstance->updateGuildTemplate($guild_id, $code, $update_guild_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **code** | [**mixed**](../Model/.md)|  | |
| **update_guild_template_request** | [**\OpenAPI\Client\Model\UpdateGuildTemplateRequest**](../Model/UpdateGuildTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildTemplateResponse**](../Model/GuildTemplateResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildWelcomeScreen()`

```php
updateGuildWelcomeScreen($guild_id, $welcome_screen_patch_request_partial): \OpenAPI\Client\Model\GuildWelcomeScreenResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$welcome_screen_patch_request_partial = new \OpenAPI\Client\Model\WelcomeScreenPatchRequestPartial(); // \OpenAPI\Client\Model\WelcomeScreenPatchRequestPartial

try {
    $result = $apiInstance->updateGuildWelcomeScreen($guild_id, $welcome_screen_patch_request_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildWelcomeScreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **welcome_screen_patch_request_partial** | [**\OpenAPI\Client\Model\WelcomeScreenPatchRequestPartial**](../Model/WelcomeScreenPatchRequestPartial.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuildWelcomeScreenResponse**](../Model/GuildWelcomeScreenResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuildWidgetSettings()`

```php
updateGuildWidgetSettings($guild_id, $update_guild_widget_settings_request): \OpenAPI\Client\Model\WidgetSettingsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$update_guild_widget_settings_request = new \OpenAPI\Client\Model\UpdateGuildWidgetSettingsRequest(); // \OpenAPI\Client\Model\UpdateGuildWidgetSettingsRequest

try {
    $result = $apiInstance->updateGuildWidgetSettings($guild_id, $update_guild_widget_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateGuildWidgetSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **update_guild_widget_settings_request** | [**\OpenAPI\Client\Model\UpdateGuildWidgetSettingsRequest**](../Model/UpdateGuildWidgetSettingsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WidgetSettingsResponse**](../Model/WidgetSettingsResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMessage()`

```php
updateMessage($channel_id, $message_id, $message_edit_request_partial): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$message_edit_request_partial = new \OpenAPI\Client\Model\MessageEditRequestPartial(); // \OpenAPI\Client\Model\MessageEditRequestPartial

try {
    $result = $apiInstance->updateMessage($channel_id, $message_id, $message_edit_request_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **message_edit_request_partial** | [**\OpenAPI\Client\Model\MessageEditRequestPartial**](../Model/MessageEditRequestPartial.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMyApplication()`

```php
updateMyApplication($application_form_partial): \OpenAPI\Client\Model\PrivateApplicationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_form_partial = new \OpenAPI\Client\Model\ApplicationFormPartial(); // \OpenAPI\Client\Model\ApplicationFormPartial

try {
    $result = $apiInstance->updateMyApplication($application_form_partial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateMyApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_form_partial** | [**\OpenAPI\Client\Model\ApplicationFormPartial**](../Model/ApplicationFormPartial.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PrivateApplicationResponse**](../Model/PrivateApplicationResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMyGuildMember()`

```php
updateMyGuildMember($guild_id, $update_my_guild_member_request): \OpenAPI\Client\Model\PrivateGuildMemberResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$update_my_guild_member_request = new \OpenAPI\Client\Model\UpdateMyGuildMemberRequest(); // \OpenAPI\Client\Model\UpdateMyGuildMemberRequest

try {
    $result = $apiInstance->updateMyGuildMember($guild_id, $update_my_guild_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateMyGuildMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **update_my_guild_member_request** | [**\OpenAPI\Client\Model\UpdateMyGuildMemberRequest**](../Model/UpdateMyGuildMemberRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PrivateGuildMemberResponse**](../Model/PrivateGuildMemberResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMyUser()`

```php
updateMyUser($bot_account_patch_request): \OpenAPI\Client\Model\UserPIIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bot_account_patch_request = new \OpenAPI\Client\Model\BotAccountPatchRequest(); // \OpenAPI\Client\Model\BotAccountPatchRequest

try {
    $result = $apiInstance->updateMyUser($bot_account_patch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateMyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bot_account_patch_request** | [**\OpenAPI\Client\Model\BotAccountPatchRequest**](../Model/BotAccountPatchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserPIIResponse**](../Model/UserPIIResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOriginalWebhookMessage()`

```php
updateOriginalWebhookMessage($webhook_id, $webhook_token, $incoming_webhook_update_request_partial, $thread_id): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = 'webhook_token_example'; // string
$incoming_webhook_update_request_partial = new \OpenAPI\Client\Model\IncomingWebhookUpdateRequestPartial(); // \OpenAPI\Client\Model\IncomingWebhookUpdateRequestPartial
$thread_id = 'thread_id_example'; // string

try {
    $result = $apiInstance->updateOriginalWebhookMessage($webhook_id, $webhook_token, $incoming_webhook_update_request_partial, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateOriginalWebhookMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | **string**|  | |
| **incoming_webhook_update_request_partial** | [**\OpenAPI\Client\Model\IncomingWebhookUpdateRequestPartial**](../Model/IncomingWebhookUpdateRequestPartial.md)|  | |
| **thread_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSelfVoiceState()`

```php
updateSelfVoiceState($guild_id, $update_self_voice_state_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$update_self_voice_state_request = new \OpenAPI\Client\Model\UpdateSelfVoiceStateRequest(); // \OpenAPI\Client\Model\UpdateSelfVoiceStateRequest

try {
    $apiInstance->updateSelfVoiceState($guild_id, $update_self_voice_state_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateSelfVoiceState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **update_self_voice_state_request** | [**\OpenAPI\Client\Model\UpdateSelfVoiceStateRequest**](../Model/UpdateSelfVoiceStateRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStageInstance()`

```php
updateStageInstance($channel_id, $update_stage_instance_request): \OpenAPI\Client\Model\StageInstanceResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$update_stage_instance_request = new \OpenAPI\Client\Model\UpdateStageInstanceRequest(); // \OpenAPI\Client\Model\UpdateStageInstanceRequest

try {
    $result = $apiInstance->updateStageInstance($channel_id, $update_stage_instance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateStageInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **update_stage_instance_request** | [**\OpenAPI\Client\Model\UpdateStageInstanceRequest**](../Model/UpdateStageInstanceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StageInstanceResponse**](../Model/StageInstanceResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoiceState()`

```php
updateVoiceState($guild_id, $user_id, $update_voice_state_request)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$update_voice_state_request = new \OpenAPI\Client\Model\UpdateVoiceStateRequest(); // \OpenAPI\Client\Model\UpdateVoiceStateRequest

try {
    $apiInstance->updateVoiceState($guild_id, $user_id, $update_voice_state_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateVoiceState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |
| **update_voice_state_request** | [**\OpenAPI\Client\Model\UpdateVoiceStateRequest**](../Model/UpdateVoiceStateRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($webhook_id, $update_webhook_request): \OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$update_webhook_request = new \OpenAPI\Client\Model\UpdateWebhookRequest(); // \OpenAPI\Client\Model\UpdateWebhookRequest

try {
    $result = $apiInstance->updateWebhook($webhook_id, $update_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **update_webhook_request** | [**\OpenAPI\Client\Model\UpdateWebhookRequest**](../Model/UpdateWebhookRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner**](../Model/ListChannelWebhooks200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookByToken()`

```php
updateWebhookByToken($webhook_id, $webhook_token, $update_webhook_by_token_request): \OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed
$update_webhook_by_token_request = new \OpenAPI\Client\Model\UpdateWebhookByTokenRequest(); // \OpenAPI\Client\Model\UpdateWebhookByTokenRequest

try {
    $result = $apiInstance->updateWebhookByToken($webhook_id, $webhook_token, $update_webhook_by_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateWebhookByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |
| **update_webhook_by_token_request** | [**\OpenAPI\Client\Model\UpdateWebhookByTokenRequest**](../Model/UpdateWebhookByTokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ListChannelWebhooks200ResponseInner**](../Model/ListChannelWebhooks200ResponseInner.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookMessage()`

```php
updateWebhookMessage($webhook_id, $webhook_token, $message_id, $incoming_webhook_update_request_partial, $thread_id): \OpenAPI\Client\Model\MessageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: BotToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultAPI(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 'webhook_id_example'; // string
$webhook_token = NULL; // mixed
$message_id = 'message_id_example'; // string
$incoming_webhook_update_request_partial = new \OpenAPI\Client\Model\IncomingWebhookUpdateRequestPartial(); // \OpenAPI\Client\Model\IncomingWebhookUpdateRequestPartial
$thread_id = 'thread_id_example'; // string

try {
    $result = $apiInstance->updateWebhookMessage($webhook_id, $webhook_token, $message_id, $incoming_webhook_update_request_partial, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultAPI->updateWebhookMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**|  | |
| **webhook_token** | [**mixed**](../Model/.md)|  | |
| **message_id** | **string**|  | |
| **incoming_webhook_update_request_partial** | [**\OpenAPI\Client\Model\IncomingWebhookUpdateRequestPartial**](../Model/IncomingWebhookUpdateRequestPartial.md)|  | |
| **thread_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[BotToken](../../README.md#BotToken)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
