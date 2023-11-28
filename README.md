# tinyoverflow/discord-php

Preview of the Discord v10 HTTP API specification. See https://discord.com/developers/docs for more details.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tinyoverflow/discord-php.git"
    }
  ],
  "require": {
    "tinyoverflow/discord-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/tinyoverflow/discord-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://discord.com/api/v10*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultAPI* | [**addGroupDmUser**](docs/Api/DefaultAPI.md#addgroupdmuser) | **PUT** /channels/{channel_id}/recipients/{user_id} | 
*DefaultAPI* | [**addGuildMember**](docs/Api/DefaultAPI.md#addguildmember) | **PUT** /guilds/{guild_id}/members/{user_id} | 
*DefaultAPI* | [**addGuildMemberRole**](docs/Api/DefaultAPI.md#addguildmemberrole) | **PUT** /guilds/{guild_id}/members/{user_id}/roles/{role_id} | 
*DefaultAPI* | [**addMyMessageReaction**](docs/Api/DefaultAPI.md#addmymessagereaction) | **PUT** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name}/@me | 
*DefaultAPI* | [**addThreadMember**](docs/Api/DefaultAPI.md#addthreadmember) | **PUT** /channels/{channel_id}/thread-members/{user_id} | 
*DefaultAPI* | [**banUserFromGuild**](docs/Api/DefaultAPI.md#banuserfromguild) | **PUT** /guilds/{guild_id}/bans/{user_id} | 
*DefaultAPI* | [**bulkDeleteMessages**](docs/Api/DefaultAPI.md#bulkdeletemessages) | **POST** /channels/{channel_id}/messages/bulk-delete | 
*DefaultAPI* | [**bulkSetApplicationCommands**](docs/Api/DefaultAPI.md#bulksetapplicationcommands) | **PUT** /applications/{application_id}/commands | 
*DefaultAPI* | [**bulkSetGuildApplicationCommands**](docs/Api/DefaultAPI.md#bulksetguildapplicationcommands) | **PUT** /applications/{application_id}/guilds/{guild_id}/commands | 
*DefaultAPI* | [**bulkUpdateGuildChannels**](docs/Api/DefaultAPI.md#bulkupdateguildchannels) | **PATCH** /guilds/{guild_id}/channels | 
*DefaultAPI* | [**bulkUpdateGuildRoles**](docs/Api/DefaultAPI.md#bulkupdateguildroles) | **PATCH** /guilds/{guild_id}/roles | 
*DefaultAPI* | [**createApplicationCommand**](docs/Api/DefaultAPI.md#createapplicationcommand) | **POST** /applications/{application_id}/commands | 
*DefaultAPI* | [**createAutoModerationRule**](docs/Api/DefaultAPI.md#createautomoderationrule) | **POST** /guilds/{guild_id}/auto-moderation/rules | 
*DefaultAPI* | [**createChannelInvite**](docs/Api/DefaultAPI.md#createchannelinvite) | **POST** /channels/{channel_id}/invites | 
*DefaultAPI* | [**createDm**](docs/Api/DefaultAPI.md#createdm) | **POST** /users/@me/channels | 
*DefaultAPI* | [**createGuild**](docs/Api/DefaultAPI.md#createguild) | **POST** /guilds | 
*DefaultAPI* | [**createGuildApplicationCommand**](docs/Api/DefaultAPI.md#createguildapplicationcommand) | **POST** /applications/{application_id}/guilds/{guild_id}/commands | 
*DefaultAPI* | [**createGuildChannel**](docs/Api/DefaultAPI.md#createguildchannel) | **POST** /guilds/{guild_id}/channels | 
*DefaultAPI* | [**createGuildEmoji**](docs/Api/DefaultAPI.md#createguildemoji) | **POST** /guilds/{guild_id}/emojis | 
*DefaultAPI* | [**createGuildFromTemplate**](docs/Api/DefaultAPI.md#createguildfromtemplate) | **POST** /guilds/templates/{code} | 
*DefaultAPI* | [**createGuildRole**](docs/Api/DefaultAPI.md#createguildrole) | **POST** /guilds/{guild_id}/roles | 
*DefaultAPI* | [**createGuildScheduledEvent**](docs/Api/DefaultAPI.md#createguildscheduledevent) | **POST** /guilds/{guild_id}/scheduled-events | 
*DefaultAPI* | [**createGuildSticker**](docs/Api/DefaultAPI.md#createguildsticker) | **POST** /guilds/{guild_id}/stickers | 
*DefaultAPI* | [**createGuildTemplate**](docs/Api/DefaultAPI.md#createguildtemplate) | **POST** /guilds/{guild_id}/templates | 
*DefaultAPI* | [**createInteractionResponse**](docs/Api/DefaultAPI.md#createinteractionresponse) | **POST** /interactions/{interaction_id}/{interaction_token}/callback | 
*DefaultAPI* | [**createMessage**](docs/Api/DefaultAPI.md#createmessage) | **POST** /channels/{channel_id}/messages | 
*DefaultAPI* | [**createStageInstance**](docs/Api/DefaultAPI.md#createstageinstance) | **POST** /stage-instances | 
*DefaultAPI* | [**createThread**](docs/Api/DefaultAPI.md#createthread) | **POST** /channels/{channel_id}/threads | 
*DefaultAPI* | [**createThreadFromMessage**](docs/Api/DefaultAPI.md#createthreadfrommessage) | **POST** /channels/{channel_id}/messages/{message_id}/threads | 
*DefaultAPI* | [**createWebhook**](docs/Api/DefaultAPI.md#createwebhook) | **POST** /channels/{channel_id}/webhooks | 
*DefaultAPI* | [**crosspostMessage**](docs/Api/DefaultAPI.md#crosspostmessage) | **POST** /channels/{channel_id}/messages/{message_id}/crosspost | 
*DefaultAPI* | [**deleteAllMessageReactions**](docs/Api/DefaultAPI.md#deleteallmessagereactions) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions | 
*DefaultAPI* | [**deleteAllMessageReactionsByEmoji**](docs/Api/DefaultAPI.md#deleteallmessagereactionsbyemoji) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name} | 
*DefaultAPI* | [**deleteApplicationCommand**](docs/Api/DefaultAPI.md#deleteapplicationcommand) | **DELETE** /applications/{application_id}/commands/{command_id} | 
*DefaultAPI* | [**deleteAutoModerationRule**](docs/Api/DefaultAPI.md#deleteautomoderationrule) | **DELETE** /guilds/{guild_id}/auto-moderation/rules/{rule_id} | 
*DefaultAPI* | [**deleteChannel**](docs/Api/DefaultAPI.md#deletechannel) | **DELETE** /channels/{channel_id} | 
*DefaultAPI* | [**deleteChannelPermissionOverwrite**](docs/Api/DefaultAPI.md#deletechannelpermissionoverwrite) | **DELETE** /channels/{channel_id}/permissions/{overwrite_id} | 
*DefaultAPI* | [**deleteGroupDmUser**](docs/Api/DefaultAPI.md#deletegroupdmuser) | **DELETE** /channels/{channel_id}/recipients/{user_id} | 
*DefaultAPI* | [**deleteGuild**](docs/Api/DefaultAPI.md#deleteguild) | **DELETE** /guilds/{guild_id} | 
*DefaultAPI* | [**deleteGuildApplicationCommand**](docs/Api/DefaultAPI.md#deleteguildapplicationcommand) | **DELETE** /applications/{application_id}/guilds/{guild_id}/commands/{command_id} | 
*DefaultAPI* | [**deleteGuildEmoji**](docs/Api/DefaultAPI.md#deleteguildemoji) | **DELETE** /guilds/{guild_id}/emojis/{emoji_id} | 
*DefaultAPI* | [**deleteGuildIntegration**](docs/Api/DefaultAPI.md#deleteguildintegration) | **DELETE** /guilds/{guild_id}/integrations/{integration_id} | 
*DefaultAPI* | [**deleteGuildMember**](docs/Api/DefaultAPI.md#deleteguildmember) | **DELETE** /guilds/{guild_id}/members/{user_id} | 
*DefaultAPI* | [**deleteGuildMemberRole**](docs/Api/DefaultAPI.md#deleteguildmemberrole) | **DELETE** /guilds/{guild_id}/members/{user_id}/roles/{role_id} | 
*DefaultAPI* | [**deleteGuildRole**](docs/Api/DefaultAPI.md#deleteguildrole) | **DELETE** /guilds/{guild_id}/roles/{role_id} | 
*DefaultAPI* | [**deleteGuildScheduledEvent**](docs/Api/DefaultAPI.md#deleteguildscheduledevent) | **DELETE** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id} | 
*DefaultAPI* | [**deleteGuildSticker**](docs/Api/DefaultAPI.md#deleteguildsticker) | **DELETE** /guilds/{guild_id}/stickers/{sticker_id} | 
*DefaultAPI* | [**deleteGuildTemplate**](docs/Api/DefaultAPI.md#deleteguildtemplate) | **DELETE** /guilds/{guild_id}/templates/{code} | 
*DefaultAPI* | [**deleteMessage**](docs/Api/DefaultAPI.md#deletemessage) | **DELETE** /channels/{channel_id}/messages/{message_id} | 
*DefaultAPI* | [**deleteMyMessageReaction**](docs/Api/DefaultAPI.md#deletemymessagereaction) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name}/@me | 
*DefaultAPI* | [**deleteOriginalWebhookMessage**](docs/Api/DefaultAPI.md#deleteoriginalwebhookmessage) | **DELETE** /webhooks/{webhook_id}/{webhook_token}/messages/@original | 
*DefaultAPI* | [**deleteStageInstance**](docs/Api/DefaultAPI.md#deletestageinstance) | **DELETE** /stage-instances/{channel_id} | 
*DefaultAPI* | [**deleteThreadMember**](docs/Api/DefaultAPI.md#deletethreadmember) | **DELETE** /channels/{channel_id}/thread-members/{user_id} | 
*DefaultAPI* | [**deleteUserMessageReaction**](docs/Api/DefaultAPI.md#deleteusermessagereaction) | **DELETE** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name}/{user_id} | 
*DefaultAPI* | [**deleteWebhook**](docs/Api/DefaultAPI.md#deletewebhook) | **DELETE** /webhooks/{webhook_id} | 
*DefaultAPI* | [**deleteWebhookByToken**](docs/Api/DefaultAPI.md#deletewebhookbytoken) | **DELETE** /webhooks/{webhook_id}/{webhook_token} | 
*DefaultAPI* | [**deleteWebhookMessage**](docs/Api/DefaultAPI.md#deletewebhookmessage) | **DELETE** /webhooks/{webhook_id}/{webhook_token}/messages/{message_id} | 
*DefaultAPI* | [**executeGithubCompatibleWebhook**](docs/Api/DefaultAPI.md#executegithubcompatiblewebhook) | **POST** /webhooks/{webhook_id}/{webhook_token}/github | 
*DefaultAPI* | [**executeSlackCompatibleWebhook**](docs/Api/DefaultAPI.md#executeslackcompatiblewebhook) | **POST** /webhooks/{webhook_id}/{webhook_token}/slack | 
*DefaultAPI* | [**executeWebhook**](docs/Api/DefaultAPI.md#executewebhook) | **POST** /webhooks/{webhook_id}/{webhook_token} | 
*DefaultAPI* | [**followChannel**](docs/Api/DefaultAPI.md#followchannel) | **POST** /channels/{channel_id}/followers | 
*DefaultAPI* | [**getActiveGuildThreads**](docs/Api/DefaultAPI.md#getactiveguildthreads) | **GET** /guilds/{guild_id}/threads/active | 
*DefaultAPI* | [**getApplication**](docs/Api/DefaultAPI.md#getapplication) | **GET** /applications/{application_id} | 
*DefaultAPI* | [**getApplicationCommand**](docs/Api/DefaultAPI.md#getapplicationcommand) | **GET** /applications/{application_id}/commands/{command_id} | 
*DefaultAPI* | [**getApplicationRoleConnectionsMetadata**](docs/Api/DefaultAPI.md#getapplicationroleconnectionsmetadata) | **GET** /applications/{application_id}/role-connections/metadata | 
*DefaultAPI* | [**getApplicationUserRoleConnection**](docs/Api/DefaultAPI.md#getapplicationuserroleconnection) | **GET** /users/@me/applications/{application_id}/role-connection | 
*DefaultAPI* | [**getAutoModerationRule**](docs/Api/DefaultAPI.md#getautomoderationrule) | **GET** /guilds/{guild_id}/auto-moderation/rules/{rule_id} | 
*DefaultAPI* | [**getBotGateway**](docs/Api/DefaultAPI.md#getbotgateway) | **GET** /gateway/bot | 
*DefaultAPI* | [**getChannel**](docs/Api/DefaultAPI.md#getchannel) | **GET** /channels/{channel_id} | 
*DefaultAPI* | [**getGateway**](docs/Api/DefaultAPI.md#getgateway) | **GET** /gateway | 
*DefaultAPI* | [**getGuild**](docs/Api/DefaultAPI.md#getguild) | **GET** /guilds/{guild_id} | 
*DefaultAPI* | [**getGuildApplicationCommand**](docs/Api/DefaultAPI.md#getguildapplicationcommand) | **GET** /applications/{application_id}/guilds/{guild_id}/commands/{command_id} | 
*DefaultAPI* | [**getGuildApplicationCommandPermissions**](docs/Api/DefaultAPI.md#getguildapplicationcommandpermissions) | **GET** /applications/{application_id}/guilds/{guild_id}/commands/{command_id}/permissions | 
*DefaultAPI* | [**getGuildBan**](docs/Api/DefaultAPI.md#getguildban) | **GET** /guilds/{guild_id}/bans/{user_id} | 
*DefaultAPI* | [**getGuildEmoji**](docs/Api/DefaultAPI.md#getguildemoji) | **GET** /guilds/{guild_id}/emojis/{emoji_id} | 
*DefaultAPI* | [**getGuildMember**](docs/Api/DefaultAPI.md#getguildmember) | **GET** /guilds/{guild_id}/members/{user_id} | 
*DefaultAPI* | [**getGuildNewMemberWelcome**](docs/Api/DefaultAPI.md#getguildnewmemberwelcome) | **GET** /guilds/{guild_id}/new-member-welcome | 
*DefaultAPI* | [**getGuildPreview**](docs/Api/DefaultAPI.md#getguildpreview) | **GET** /guilds/{guild_id}/preview | 
*DefaultAPI* | [**getGuildScheduledEvent**](docs/Api/DefaultAPI.md#getguildscheduledevent) | **GET** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id} | 
*DefaultAPI* | [**getGuildSticker**](docs/Api/DefaultAPI.md#getguildsticker) | **GET** /guilds/{guild_id}/stickers/{sticker_id} | 
*DefaultAPI* | [**getGuildTemplate**](docs/Api/DefaultAPI.md#getguildtemplate) | **GET** /guilds/templates/{code} | 
*DefaultAPI* | [**getGuildVanityUrl**](docs/Api/DefaultAPI.md#getguildvanityurl) | **GET** /guilds/{guild_id}/vanity-url | 
*DefaultAPI* | [**getGuildWebhooks**](docs/Api/DefaultAPI.md#getguildwebhooks) | **GET** /guilds/{guild_id}/webhooks | 
*DefaultAPI* | [**getGuildWelcomeScreen**](docs/Api/DefaultAPI.md#getguildwelcomescreen) | **GET** /guilds/{guild_id}/welcome-screen | 
*DefaultAPI* | [**getGuildWidget**](docs/Api/DefaultAPI.md#getguildwidget) | **GET** /guilds/{guild_id}/widget.json | 
*DefaultAPI* | [**getGuildWidgetPng**](docs/Api/DefaultAPI.md#getguildwidgetpng) | **GET** /guilds/{guild_id}/widget.png | 
*DefaultAPI* | [**getGuildWidgetSettings**](docs/Api/DefaultAPI.md#getguildwidgetsettings) | **GET** /guilds/{guild_id}/widget | 
*DefaultAPI* | [**getGuildsOnboarding**](docs/Api/DefaultAPI.md#getguildsonboarding) | **GET** /guilds/{guild_id}/onboarding | 
*DefaultAPI* | [**getMessage**](docs/Api/DefaultAPI.md#getmessage) | **GET** /channels/{channel_id}/messages/{message_id} | 
*DefaultAPI* | [**getMyApplication**](docs/Api/DefaultAPI.md#getmyapplication) | **GET** /applications/@me | 
*DefaultAPI* | [**getMyGuildMember**](docs/Api/DefaultAPI.md#getmyguildmember) | **GET** /users/@me/guilds/{guild_id}/member | 
*DefaultAPI* | [**getMyOauth2Application**](docs/Api/DefaultAPI.md#getmyoauth2application) | **GET** /oauth2/applications/@me | 
*DefaultAPI* | [**getMyOauth2Authorization**](docs/Api/DefaultAPI.md#getmyoauth2authorization) | **GET** /oauth2/@me | 
*DefaultAPI* | [**getMyUser**](docs/Api/DefaultAPI.md#getmyuser) | **GET** /users/@me | 
*DefaultAPI* | [**getOriginalWebhookMessage**](docs/Api/DefaultAPI.md#getoriginalwebhookmessage) | **GET** /webhooks/{webhook_id}/{webhook_token}/messages/@original | 
*DefaultAPI* | [**getStageInstance**](docs/Api/DefaultAPI.md#getstageinstance) | **GET** /stage-instances/{channel_id} | 
*DefaultAPI* | [**getSticker**](docs/Api/DefaultAPI.md#getsticker) | **GET** /stickers/{sticker_id} | 
*DefaultAPI* | [**getThreadMember**](docs/Api/DefaultAPI.md#getthreadmember) | **GET** /channels/{channel_id}/thread-members/{user_id} | 
*DefaultAPI* | [**getUser**](docs/Api/DefaultAPI.md#getuser) | **GET** /users/{user_id} | 
*DefaultAPI* | [**getWebhook**](docs/Api/DefaultAPI.md#getwebhook) | **GET** /webhooks/{webhook_id} | 
*DefaultAPI* | [**getWebhookByToken**](docs/Api/DefaultAPI.md#getwebhookbytoken) | **GET** /webhooks/{webhook_id}/{webhook_token} | 
*DefaultAPI* | [**getWebhookMessage**](docs/Api/DefaultAPI.md#getwebhookmessage) | **GET** /webhooks/{webhook_id}/{webhook_token}/messages/{message_id} | 
*DefaultAPI* | [**inviteResolve**](docs/Api/DefaultAPI.md#inviteresolve) | **GET** /invites/{code} | 
*DefaultAPI* | [**inviteRevoke**](docs/Api/DefaultAPI.md#inviterevoke) | **DELETE** /invites/{code} | 
*DefaultAPI* | [**joinThread**](docs/Api/DefaultAPI.md#jointhread) | **PUT** /channels/{channel_id}/thread-members/@me | 
*DefaultAPI* | [**leaveGuild**](docs/Api/DefaultAPI.md#leaveguild) | **DELETE** /users/@me/guilds/{guild_id} | 
*DefaultAPI* | [**leaveThread**](docs/Api/DefaultAPI.md#leavethread) | **DELETE** /channels/{channel_id}/thread-members/@me | 
*DefaultAPI* | [**listApplicationCommands**](docs/Api/DefaultAPI.md#listapplicationcommands) | **GET** /applications/{application_id}/commands | 
*DefaultAPI* | [**listAutoModerationRules**](docs/Api/DefaultAPI.md#listautomoderationrules) | **GET** /guilds/{guild_id}/auto-moderation/rules | 
*DefaultAPI* | [**listChannelInvites**](docs/Api/DefaultAPI.md#listchannelinvites) | **GET** /channels/{channel_id}/invites | 
*DefaultAPI* | [**listChannelWebhooks**](docs/Api/DefaultAPI.md#listchannelwebhooks) | **GET** /channels/{channel_id}/webhooks | 
*DefaultAPI* | [**listGuildApplicationCommandPermissions**](docs/Api/DefaultAPI.md#listguildapplicationcommandpermissions) | **GET** /applications/{application_id}/guilds/{guild_id}/commands/permissions | 
*DefaultAPI* | [**listGuildApplicationCommands**](docs/Api/DefaultAPI.md#listguildapplicationcommands) | **GET** /applications/{application_id}/guilds/{guild_id}/commands | 
*DefaultAPI* | [**listGuildAuditLogEntries**](docs/Api/DefaultAPI.md#listguildauditlogentries) | **GET** /guilds/{guild_id}/audit-logs | 
*DefaultAPI* | [**listGuildBans**](docs/Api/DefaultAPI.md#listguildbans) | **GET** /guilds/{guild_id}/bans | 
*DefaultAPI* | [**listGuildChannels**](docs/Api/DefaultAPI.md#listguildchannels) | **GET** /guilds/{guild_id}/channels | 
*DefaultAPI* | [**listGuildEmojis**](docs/Api/DefaultAPI.md#listguildemojis) | **GET** /guilds/{guild_id}/emojis | 
*DefaultAPI* | [**listGuildIntegrations**](docs/Api/DefaultAPI.md#listguildintegrations) | **GET** /guilds/{guild_id}/integrations | 
*DefaultAPI* | [**listGuildInvites**](docs/Api/DefaultAPI.md#listguildinvites) | **GET** /guilds/{guild_id}/invites | 
*DefaultAPI* | [**listGuildMembers**](docs/Api/DefaultAPI.md#listguildmembers) | **GET** /guilds/{guild_id}/members | 
*DefaultAPI* | [**listGuildRoles**](docs/Api/DefaultAPI.md#listguildroles) | **GET** /guilds/{guild_id}/roles | 
*DefaultAPI* | [**listGuildScheduledEventUsers**](docs/Api/DefaultAPI.md#listguildscheduledeventusers) | **GET** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id}/users | 
*DefaultAPI* | [**listGuildScheduledEvents**](docs/Api/DefaultAPI.md#listguildscheduledevents) | **GET** /guilds/{guild_id}/scheduled-events | 
*DefaultAPI* | [**listGuildStickers**](docs/Api/DefaultAPI.md#listguildstickers) | **GET** /guilds/{guild_id}/stickers | 
*DefaultAPI* | [**listGuildTemplates**](docs/Api/DefaultAPI.md#listguildtemplates) | **GET** /guilds/{guild_id}/templates | 
*DefaultAPI* | [**listGuildVoiceRegions**](docs/Api/DefaultAPI.md#listguildvoiceregions) | **GET** /guilds/{guild_id}/regions | 
*DefaultAPI* | [**listMessageReactionsByEmoji**](docs/Api/DefaultAPI.md#listmessagereactionsbyemoji) | **GET** /channels/{channel_id}/messages/{message_id}/reactions/{emoji_name} | 
*DefaultAPI* | [**listMessages**](docs/Api/DefaultAPI.md#listmessages) | **GET** /channels/{channel_id}/messages | 
*DefaultAPI* | [**listMyConnections**](docs/Api/DefaultAPI.md#listmyconnections) | **GET** /users/@me/connections | 
*DefaultAPI* | [**listMyGuilds**](docs/Api/DefaultAPI.md#listmyguilds) | **GET** /users/@me/guilds | 
*DefaultAPI* | [**listMyPrivateArchivedThreads**](docs/Api/DefaultAPI.md#listmyprivatearchivedthreads) | **GET** /channels/{channel_id}/users/@me/threads/archived/private | 
*DefaultAPI* | [**listPinnedMessages**](docs/Api/DefaultAPI.md#listpinnedmessages) | **GET** /channels/{channel_id}/pins | 
*DefaultAPI* | [**listPrivateArchivedThreads**](docs/Api/DefaultAPI.md#listprivatearchivedthreads) | **GET** /channels/{channel_id}/threads/archived/private | 
*DefaultAPI* | [**listPublicArchivedThreads**](docs/Api/DefaultAPI.md#listpublicarchivedthreads) | **GET** /channels/{channel_id}/threads/archived/public | 
*DefaultAPI* | [**listStickerPacks**](docs/Api/DefaultAPI.md#liststickerpacks) | **GET** /sticker-packs | 
*DefaultAPI* | [**listThreadMembers**](docs/Api/DefaultAPI.md#listthreadmembers) | **GET** /channels/{channel_id}/thread-members | 
*DefaultAPI* | [**listVoiceRegions**](docs/Api/DefaultAPI.md#listvoiceregions) | **GET** /voice/regions | 
*DefaultAPI* | [**pinMessage**](docs/Api/DefaultAPI.md#pinmessage) | **PUT** /channels/{channel_id}/pins/{message_id} | 
*DefaultAPI* | [**previewPruneGuild**](docs/Api/DefaultAPI.md#previewpruneguild) | **GET** /guilds/{guild_id}/prune | 
*DefaultAPI* | [**pruneGuild**](docs/Api/DefaultAPI.md#pruneguild) | **POST** /guilds/{guild_id}/prune | 
*DefaultAPI* | [**putGuildsOnboarding**](docs/Api/DefaultAPI.md#putguildsonboarding) | **PUT** /guilds/{guild_id}/onboarding | 
*DefaultAPI* | [**searchGuildMembers**](docs/Api/DefaultAPI.md#searchguildmembers) | **GET** /guilds/{guild_id}/members/search | 
*DefaultAPI* | [**setChannelPermissionOverwrite**](docs/Api/DefaultAPI.md#setchannelpermissionoverwrite) | **PUT** /channels/{channel_id}/permissions/{overwrite_id} | 
*DefaultAPI* | [**setGuildApplicationCommandPermissions**](docs/Api/DefaultAPI.md#setguildapplicationcommandpermissions) | **PUT** /applications/{application_id}/guilds/{guild_id}/commands/{command_id}/permissions | 
*DefaultAPI* | [**setGuildMfaLevel**](docs/Api/DefaultAPI.md#setguildmfalevel) | **POST** /guilds/{guild_id}/mfa | 
*DefaultAPI* | [**syncGuildTemplate**](docs/Api/DefaultAPI.md#syncguildtemplate) | **PUT** /guilds/{guild_id}/templates/{code} | 
*DefaultAPI* | [**triggerTypingIndicator**](docs/Api/DefaultAPI.md#triggertypingindicator) | **POST** /channels/{channel_id}/typing | 
*DefaultAPI* | [**unbanUserFromGuild**](docs/Api/DefaultAPI.md#unbanuserfromguild) | **DELETE** /guilds/{guild_id}/bans/{user_id} | 
*DefaultAPI* | [**unpinMessage**](docs/Api/DefaultAPI.md#unpinmessage) | **DELETE** /channels/{channel_id}/pins/{message_id} | 
*DefaultAPI* | [**updateApplication**](docs/Api/DefaultAPI.md#updateapplication) | **PATCH** /applications/{application_id} | 
*DefaultAPI* | [**updateApplicationCommand**](docs/Api/DefaultAPI.md#updateapplicationcommand) | **PATCH** /applications/{application_id}/commands/{command_id} | 
*DefaultAPI* | [**updateApplicationRoleConnectionsMetadata**](docs/Api/DefaultAPI.md#updateapplicationroleconnectionsmetadata) | **PUT** /applications/{application_id}/role-connections/metadata | 
*DefaultAPI* | [**updateApplicationUserRoleConnection**](docs/Api/DefaultAPI.md#updateapplicationuserroleconnection) | **PUT** /users/@me/applications/{application_id}/role-connection | 
*DefaultAPI* | [**updateAutoModerationRule**](docs/Api/DefaultAPI.md#updateautomoderationrule) | **PATCH** /guilds/{guild_id}/auto-moderation/rules/{rule_id} | 
*DefaultAPI* | [**updateChannel**](docs/Api/DefaultAPI.md#updatechannel) | **PATCH** /channels/{channel_id} | 
*DefaultAPI* | [**updateGuild**](docs/Api/DefaultAPI.md#updateguild) | **PATCH** /guilds/{guild_id} | 
*DefaultAPI* | [**updateGuildApplicationCommand**](docs/Api/DefaultAPI.md#updateguildapplicationcommand) | **PATCH** /applications/{application_id}/guilds/{guild_id}/commands/{command_id} | 
*DefaultAPI* | [**updateGuildEmoji**](docs/Api/DefaultAPI.md#updateguildemoji) | **PATCH** /guilds/{guild_id}/emojis/{emoji_id} | 
*DefaultAPI* | [**updateGuildMember**](docs/Api/DefaultAPI.md#updateguildmember) | **PATCH** /guilds/{guild_id}/members/{user_id} | 
*DefaultAPI* | [**updateGuildRole**](docs/Api/DefaultAPI.md#updateguildrole) | **PATCH** /guilds/{guild_id}/roles/{role_id} | 
*DefaultAPI* | [**updateGuildScheduledEvent**](docs/Api/DefaultAPI.md#updateguildscheduledevent) | **PATCH** /guilds/{guild_id}/scheduled-events/{guild_scheduled_event_id} | 
*DefaultAPI* | [**updateGuildSticker**](docs/Api/DefaultAPI.md#updateguildsticker) | **PATCH** /guilds/{guild_id}/stickers/{sticker_id} | 
*DefaultAPI* | [**updateGuildTemplate**](docs/Api/DefaultAPI.md#updateguildtemplate) | **PATCH** /guilds/{guild_id}/templates/{code} | 
*DefaultAPI* | [**updateGuildWelcomeScreen**](docs/Api/DefaultAPI.md#updateguildwelcomescreen) | **PATCH** /guilds/{guild_id}/welcome-screen | 
*DefaultAPI* | [**updateGuildWidgetSettings**](docs/Api/DefaultAPI.md#updateguildwidgetsettings) | **PATCH** /guilds/{guild_id}/widget | 
*DefaultAPI* | [**updateMessage**](docs/Api/DefaultAPI.md#updatemessage) | **PATCH** /channels/{channel_id}/messages/{message_id} | 
*DefaultAPI* | [**updateMyApplication**](docs/Api/DefaultAPI.md#updatemyapplication) | **PATCH** /applications/@me | 
*DefaultAPI* | [**updateMyGuildMember**](docs/Api/DefaultAPI.md#updatemyguildmember) | **PATCH** /guilds/{guild_id}/members/@me | 
*DefaultAPI* | [**updateMyUser**](docs/Api/DefaultAPI.md#updatemyuser) | **PATCH** /users/@me | 
*DefaultAPI* | [**updateOriginalWebhookMessage**](docs/Api/DefaultAPI.md#updateoriginalwebhookmessage) | **PATCH** /webhooks/{webhook_id}/{webhook_token}/messages/@original | 
*DefaultAPI* | [**updateSelfVoiceState**](docs/Api/DefaultAPI.md#updateselfvoicestate) | **PATCH** /guilds/{guild_id}/voice-states/@me | 
*DefaultAPI* | [**updateStageInstance**](docs/Api/DefaultAPI.md#updatestageinstance) | **PATCH** /stage-instances/{channel_id} | 
*DefaultAPI* | [**updateVoiceState**](docs/Api/DefaultAPI.md#updatevoicestate) | **PATCH** /guilds/{guild_id}/voice-states/{user_id} | 
*DefaultAPI* | [**updateWebhook**](docs/Api/DefaultAPI.md#updatewebhook) | **PATCH** /webhooks/{webhook_id} | 
*DefaultAPI* | [**updateWebhookByToken**](docs/Api/DefaultAPI.md#updatewebhookbytoken) | **PATCH** /webhooks/{webhook_id}/{webhook_token} | 
*DefaultAPI* | [**updateWebhookMessage**](docs/Api/DefaultAPI.md#updatewebhookmessage) | **PATCH** /webhooks/{webhook_id}/{webhook_token}/messages/{message_id} | 

## Models

- [AccountResponse](docs/Model/AccountResponse.md)
- [ActionRow](docs/Model/ActionRow.md)
- [ActionRowComponentsInner](docs/Model/ActionRowComponentsInner.md)
- [AddGroupDmUserRequest](docs/Model/AddGroupDmUserRequest.md)
- [AddGuildMemberRequest](docs/Model/AddGuildMemberRequest.md)
- [AfkTimeouts](docs/Model/AfkTimeouts.md)
- [AllowedMentionTypes](docs/Model/AllowedMentionTypes.md)
- [ApplicationCommandAttachmentOption](docs/Model/ApplicationCommandAttachmentOption.md)
- [ApplicationCommandAttachmentOptionResponse](docs/Model/ApplicationCommandAttachmentOptionResponse.md)
- [ApplicationCommandAutocompleteCallbackRequest](docs/Model/ApplicationCommandAutocompleteCallbackRequest.md)
- [ApplicationCommandAutocompleteCallbackRequestData](docs/Model/ApplicationCommandAutocompleteCallbackRequestData.md)
- [ApplicationCommandBooleanOption](docs/Model/ApplicationCommandBooleanOption.md)
- [ApplicationCommandBooleanOptionResponse](docs/Model/ApplicationCommandBooleanOptionResponse.md)
- [ApplicationCommandChannelOption](docs/Model/ApplicationCommandChannelOption.md)
- [ApplicationCommandChannelOptionResponse](docs/Model/ApplicationCommandChannelOptionResponse.md)
- [ApplicationCommandCreateRequest](docs/Model/ApplicationCommandCreateRequest.md)
- [ApplicationCommandCreateRequestOptionsInner](docs/Model/ApplicationCommandCreateRequestOptionsInner.md)
- [ApplicationCommandIntegerOption](docs/Model/ApplicationCommandIntegerOption.md)
- [ApplicationCommandIntegerOptionResponse](docs/Model/ApplicationCommandIntegerOptionResponse.md)
- [ApplicationCommandMentionableOption](docs/Model/ApplicationCommandMentionableOption.md)
- [ApplicationCommandMentionableOptionResponse](docs/Model/ApplicationCommandMentionableOptionResponse.md)
- [ApplicationCommandNumberOption](docs/Model/ApplicationCommandNumberOption.md)
- [ApplicationCommandNumberOptionResponse](docs/Model/ApplicationCommandNumberOptionResponse.md)
- [ApplicationCommandOptionIntegerChoice](docs/Model/ApplicationCommandOptionIntegerChoice.md)
- [ApplicationCommandOptionIntegerChoiceResponse](docs/Model/ApplicationCommandOptionIntegerChoiceResponse.md)
- [ApplicationCommandOptionNumberChoice](docs/Model/ApplicationCommandOptionNumberChoice.md)
- [ApplicationCommandOptionNumberChoiceResponse](docs/Model/ApplicationCommandOptionNumberChoiceResponse.md)
- [ApplicationCommandOptionStringChoice](docs/Model/ApplicationCommandOptionStringChoice.md)
- [ApplicationCommandOptionStringChoiceResponse](docs/Model/ApplicationCommandOptionStringChoiceResponse.md)
- [ApplicationCommandOptionType](docs/Model/ApplicationCommandOptionType.md)
- [ApplicationCommandPatchRequestPartial](docs/Model/ApplicationCommandPatchRequestPartial.md)
- [ApplicationCommandPermission](docs/Model/ApplicationCommandPermission.md)
- [ApplicationCommandPermissionType](docs/Model/ApplicationCommandPermissionType.md)
- [ApplicationCommandResponse](docs/Model/ApplicationCommandResponse.md)
- [ApplicationCommandResponseOptionsInner](docs/Model/ApplicationCommandResponseOptionsInner.md)
- [ApplicationCommandRoleOption](docs/Model/ApplicationCommandRoleOption.md)
- [ApplicationCommandRoleOptionResponse](docs/Model/ApplicationCommandRoleOptionResponse.md)
- [ApplicationCommandStringOption](docs/Model/ApplicationCommandStringOption.md)
- [ApplicationCommandStringOptionResponse](docs/Model/ApplicationCommandStringOptionResponse.md)
- [ApplicationCommandSubcommandGroupOption](docs/Model/ApplicationCommandSubcommandGroupOption.md)
- [ApplicationCommandSubcommandGroupOptionResponse](docs/Model/ApplicationCommandSubcommandGroupOptionResponse.md)
- [ApplicationCommandSubcommandOption](docs/Model/ApplicationCommandSubcommandOption.md)
- [ApplicationCommandSubcommandOptionOptionsInner](docs/Model/ApplicationCommandSubcommandOptionOptionsInner.md)
- [ApplicationCommandSubcommandOptionResponse](docs/Model/ApplicationCommandSubcommandOptionResponse.md)
- [ApplicationCommandSubcommandOptionResponseOptionsInner](docs/Model/ApplicationCommandSubcommandOptionResponseOptionsInner.md)
- [ApplicationCommandType](docs/Model/ApplicationCommandType.md)
- [ApplicationCommandUpdateRequest](docs/Model/ApplicationCommandUpdateRequest.md)
- [ApplicationCommandUserOption](docs/Model/ApplicationCommandUserOption.md)
- [ApplicationCommandUserOptionResponse](docs/Model/ApplicationCommandUserOptionResponse.md)
- [ApplicationFormPartial](docs/Model/ApplicationFormPartial.md)
- [ApplicationFormPartialDescription](docs/Model/ApplicationFormPartialDescription.md)
- [ApplicationIncomingWebhookResponse](docs/Model/ApplicationIncomingWebhookResponse.md)
- [ApplicationOAuth2Params](docs/Model/ApplicationOAuth2Params.md)
- [ApplicationOAuth2ParamsResponse](docs/Model/ApplicationOAuth2ParamsResponse.md)
- [ApplicationResponse](docs/Model/ApplicationResponse.md)
- [ApplicationRoleConnectionsMetadataItemRequest](docs/Model/ApplicationRoleConnectionsMetadataItemRequest.md)
- [ApplicationRoleConnectionsMetadataItemResponse](docs/Model/ApplicationRoleConnectionsMetadataItemResponse.md)
- [ApplicationTypes](docs/Model/ApplicationTypes.md)
- [ApplicationUserRoleConnectionResponse](docs/Model/ApplicationUserRoleConnectionResponse.md)
- [AuditLogActionTypes](docs/Model/AuditLogActionTypes.md)
- [AuditLogEntryResponse](docs/Model/AuditLogEntryResponse.md)
- [AuditLogObjectChangeResponse](docs/Model/AuditLogObjectChangeResponse.md)
- [AutomodActionType](docs/Model/AutomodActionType.md)
- [AutomodEventType](docs/Model/AutomodEventType.md)
- [AutomodKeywordPresetType](docs/Model/AutomodKeywordPresetType.md)
- [AutomodTriggerType](docs/Model/AutomodTriggerType.md)
- [AvailableLocalesEnum](docs/Model/AvailableLocalesEnum.md)
- [BanUserFromGuildRequest](docs/Model/BanUserFromGuildRequest.md)
- [BaseCreateMessageCreateRequest](docs/Model/BaseCreateMessageCreateRequest.md)
- [BaseCreateMessageCreateRequestComponentsInner](docs/Model/BaseCreateMessageCreateRequestComponentsInner.md)
- [BasicApplicationResponse](docs/Model/BasicApplicationResponse.md)
- [BasicApplicationResponseBot](docs/Model/BasicApplicationResponseBot.md)
- [BasicApplicationResponseType](docs/Model/BasicApplicationResponseType.md)
- [BasicMessageResponse](docs/Model/BasicMessageResponse.md)
- [BasicMessageResponseComponentsInner](docs/Model/BasicMessageResponseComponentsInner.md)
- [BasicMessageResponseNonce](docs/Model/BasicMessageResponseNonce.md)
- [BlockMessageAction](docs/Model/BlockMessageAction.md)
- [BlockMessageActionMetadata](docs/Model/BlockMessageActionMetadata.md)
- [BlockMessageActionMetadataResponse](docs/Model/BlockMessageActionMetadataResponse.md)
- [BlockMessageActionResponse](docs/Model/BlockMessageActionResponse.md)
- [BotAccountPatchRequest](docs/Model/BotAccountPatchRequest.md)
- [BulkDeleteMessagesRequest](docs/Model/BulkDeleteMessagesRequest.md)
- [BulkUpdateGuildChannelsRequestInner](docs/Model/BulkUpdateGuildChannelsRequestInner.md)
- [BulkUpdateGuildRolesRequestInner](docs/Model/BulkUpdateGuildRolesRequestInner.md)
- [Button](docs/Model/Button.md)
- [ButtonStyleTypes](docs/Model/ButtonStyleTypes.md)
- [ChannelFollowerResponse](docs/Model/ChannelFollowerResponse.md)
- [ChannelFollowerWebhookResponse](docs/Model/ChannelFollowerWebhookResponse.md)
- [ChannelPermissionOverwriteRequest](docs/Model/ChannelPermissionOverwriteRequest.md)
- [ChannelPermissionOverwriteResponse](docs/Model/ChannelPermissionOverwriteResponse.md)
- [ChannelPermissionOverwrites](docs/Model/ChannelPermissionOverwrites.md)
- [ChannelSelect](docs/Model/ChannelSelect.md)
- [ChannelSelectDefaultValue](docs/Model/ChannelSelectDefaultValue.md)
- [ChannelTypes](docs/Model/ChannelTypes.md)
- [CommandPermissionResponse](docs/Model/CommandPermissionResponse.md)
- [CommandPermissionsResponse](docs/Model/CommandPermissionsResponse.md)
- [ConnectedAccountGuildResponse](docs/Model/ConnectedAccountGuildResponse.md)
- [ConnectedAccountIntegrationResponse](docs/Model/ConnectedAccountIntegrationResponse.md)
- [ConnectedAccountProviders](docs/Model/ConnectedAccountProviders.md)
- [ConnectedAccountResponse](docs/Model/ConnectedAccountResponse.md)
- [ConnectedAccountVisibility](docs/Model/ConnectedAccountVisibility.md)
- [CreateAutoModerationRuleRequest](docs/Model/CreateAutoModerationRuleRequest.md)
- [CreateChannelInviteRequest](docs/Model/CreateChannelInviteRequest.md)
- [CreateDm200Response](docs/Model/CreateDm200Response.md)
- [CreateForumThreadRequest](docs/Model/CreateForumThreadRequest.md)
- [CreateGroupDMInviteRequest](docs/Model/CreateGroupDMInviteRequest.md)
- [CreateGuildChannelRequest](docs/Model/CreateGuildChannelRequest.md)
- [CreateGuildEmojiRequest](docs/Model/CreateGuildEmojiRequest.md)
- [CreateGuildFromTemplateRequest](docs/Model/CreateGuildFromTemplateRequest.md)
- [CreateGuildInviteRequest](docs/Model/CreateGuildInviteRequest.md)
- [CreateGuildRequestChannelItem](docs/Model/CreateGuildRequestChannelItem.md)
- [CreateGuildRequestRoleItem](docs/Model/CreateGuildRequestRoleItem.md)
- [CreateGuildScheduledEventRequest](docs/Model/CreateGuildScheduledEventRequest.md)
- [CreateGuildTemplateRequest](docs/Model/CreateGuildTemplateRequest.md)
- [CreateInteractionResponseRequest](docs/Model/CreateInteractionResponseRequest.md)
- [CreateMessageInteractionCallbackRequest](docs/Model/CreateMessageInteractionCallbackRequest.md)
- [CreateOrUpdateThreadTagRequest](docs/Model/CreateOrUpdateThreadTagRequest.md)
- [CreatePrivateChannelRequest](docs/Model/CreatePrivateChannelRequest.md)
- [CreateStageInstanceRequest](docs/Model/CreateStageInstanceRequest.md)
- [CreateTextThreadWithMessageRequest](docs/Model/CreateTextThreadWithMessageRequest.md)
- [CreateTextThreadWithoutMessageRequest](docs/Model/CreateTextThreadWithoutMessageRequest.md)
- [CreateThreadRequest](docs/Model/CreateThreadRequest.md)
- [CreateWebhookRequest](docs/Model/CreateWebhookRequest.md)
- [CreatedThreadResponse](docs/Model/CreatedThreadResponse.md)
- [DefaultKeywordListTriggerMetadata](docs/Model/DefaultKeywordListTriggerMetadata.md)
- [DefaultKeywordListTriggerMetadataResponse](docs/Model/DefaultKeywordListTriggerMetadataResponse.md)
- [DefaultKeywordListUpsertRequest](docs/Model/DefaultKeywordListUpsertRequest.md)
- [DefaultKeywordListUpsertRequestActionsInner](docs/Model/DefaultKeywordListUpsertRequestActionsInner.md)
- [DefaultKeywordListUpsertRequestPartial](docs/Model/DefaultKeywordListUpsertRequestPartial.md)
- [DefaultKeywordRuleResponse](docs/Model/DefaultKeywordRuleResponse.md)
- [DefaultKeywordRuleResponseActionsInner](docs/Model/DefaultKeywordRuleResponseActionsInner.md)
- [DefaultReactionEmojiResponse](docs/Model/DefaultReactionEmojiResponse.md)
- [DiscordIntegrationResponse](docs/Model/DiscordIntegrationResponse.md)
- [Emoji](docs/Model/Emoji.md)
- [EmojiResponse](docs/Model/EmojiResponse.md)
- [EntityMetadataExternal](docs/Model/EntityMetadataExternal.md)
- [EntityMetadataExternalResponse](docs/Model/EntityMetadataExternalResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ExecuteWebhookRequest](docs/Model/ExecuteWebhookRequest.md)
- [ExternalConnectionIntegrationResponse](docs/Model/ExternalConnectionIntegrationResponse.md)
- [ExternalScheduledEventCreateRequest](docs/Model/ExternalScheduledEventCreateRequest.md)
- [ExternalScheduledEventPatchRequestPartial](docs/Model/ExternalScheduledEventPatchRequestPartial.md)
- [ExternalScheduledEventResponse](docs/Model/ExternalScheduledEventResponse.md)
- [FlagToChannelAction](docs/Model/FlagToChannelAction.md)
- [FlagToChannelActionMetadata](docs/Model/FlagToChannelActionMetadata.md)
- [FlagToChannelActionMetadataResponse](docs/Model/FlagToChannelActionMetadataResponse.md)
- [FlagToChannelActionResponse](docs/Model/FlagToChannelActionResponse.md)
- [FollowChannelRequest](docs/Model/FollowChannelRequest.md)
- [ForumLayout](docs/Model/ForumLayout.md)
- [ForumTagResponse](docs/Model/ForumTagResponse.md)
- [FriendInviteResponse](docs/Model/FriendInviteResponse.md)
- [GatewayBotResponse](docs/Model/GatewayBotResponse.md)
- [GatewayBotSessionStartLimitResponse](docs/Model/GatewayBotSessionStartLimitResponse.md)
- [GatewayResponse](docs/Model/GatewayResponse.md)
- [GetAutoModerationRule200Response](docs/Model/GetAutoModerationRule200Response.md)
- [GetGuildScheduledEvent200Response](docs/Model/GetGuildScheduledEvent200Response.md)
- [GetSticker200Response](docs/Model/GetSticker200Response.md)
- [GithubAuthor](docs/Model/GithubAuthor.md)
- [GithubCheckApp](docs/Model/GithubCheckApp.md)
- [GithubCheckPullRequest](docs/Model/GithubCheckPullRequest.md)
- [GithubCheckRun](docs/Model/GithubCheckRun.md)
- [GithubCheckRunOutput](docs/Model/GithubCheckRunOutput.md)
- [GithubCheckSuite](docs/Model/GithubCheckSuite.md)
- [GithubComment](docs/Model/GithubComment.md)
- [GithubCommit](docs/Model/GithubCommit.md)
- [GithubDiscussion](docs/Model/GithubDiscussion.md)
- [GithubIssue](docs/Model/GithubIssue.md)
- [GithubRelease](docs/Model/GithubRelease.md)
- [GithubRepository](docs/Model/GithubRepository.md)
- [GithubReview](docs/Model/GithubReview.md)
- [GithubUser](docs/Model/GithubUser.md)
- [GithubWebhook](docs/Model/GithubWebhook.md)
- [GroupDMInviteResponse](docs/Model/GroupDMInviteResponse.md)
- [GuildAuditLogResponse](docs/Model/GuildAuditLogResponse.md)
- [GuildAuditLogResponseIntegrationsInner](docs/Model/GuildAuditLogResponseIntegrationsInner.md)
- [GuildBanResponse](docs/Model/GuildBanResponse.md)
- [GuildChannelResponse](docs/Model/GuildChannelResponse.md)
- [GuildCreateRequest](docs/Model/GuildCreateRequest.md)
- [GuildExplicitContentFilterTypes](docs/Model/GuildExplicitContentFilterTypes.md)
- [GuildFeatures](docs/Model/GuildFeatures.md)
- [GuildHomeSettingsResponse](docs/Model/GuildHomeSettingsResponse.md)
- [GuildIncomingWebhookResponse](docs/Model/GuildIncomingWebhookResponse.md)
- [GuildInviteResponse](docs/Model/GuildInviteResponse.md)
- [GuildMFALevel](docs/Model/GuildMFALevel.md)
- [GuildMFALevelResponse](docs/Model/GuildMFALevelResponse.md)
- [GuildMemberResponse](docs/Model/GuildMemberResponse.md)
- [GuildNSFWContentLevel](docs/Model/GuildNSFWContentLevel.md)
- [GuildOnboardingMode](docs/Model/GuildOnboardingMode.md)
- [GuildOnboardingResponse](docs/Model/GuildOnboardingResponse.md)
- [GuildPatchRequestPartial](docs/Model/GuildPatchRequestPartial.md)
- [GuildPreviewResponse](docs/Model/GuildPreviewResponse.md)
- [GuildProductPurchaseResponse](docs/Model/GuildProductPurchaseResponse.md)
- [GuildPruneResponse](docs/Model/GuildPruneResponse.md)
- [GuildResponse](docs/Model/GuildResponse.md)
- [GuildRoleResponse](docs/Model/GuildRoleResponse.md)
- [GuildRoleTagsResponse](docs/Model/GuildRoleTagsResponse.md)
- [GuildScheduledEventEntityTypes](docs/Model/GuildScheduledEventEntityTypes.md)
- [GuildScheduledEventPrivacyLevels](docs/Model/GuildScheduledEventPrivacyLevels.md)
- [GuildScheduledEventStatuses](docs/Model/GuildScheduledEventStatuses.md)
- [GuildStickerResponse](docs/Model/GuildStickerResponse.md)
- [GuildSubscriptionIntegrationResponse](docs/Model/GuildSubscriptionIntegrationResponse.md)
- [GuildTemplateChannelResponse](docs/Model/GuildTemplateChannelResponse.md)
- [GuildTemplateChannelTags](docs/Model/GuildTemplateChannelTags.md)
- [GuildTemplateResponse](docs/Model/GuildTemplateResponse.md)
- [GuildTemplateRoleResponse](docs/Model/GuildTemplateRoleResponse.md)
- [GuildTemplateSnapshotResponse](docs/Model/GuildTemplateSnapshotResponse.md)
- [GuildWelcomeChannel](docs/Model/GuildWelcomeChannel.md)
- [GuildWelcomeScreenChannelResponse](docs/Model/GuildWelcomeScreenChannelResponse.md)
- [GuildWelcomeScreenResponse](docs/Model/GuildWelcomeScreenResponse.md)
- [GuildWithCountsResponse](docs/Model/GuildWithCountsResponse.md)
- [IncomingWebhookInteractionRequest](docs/Model/IncomingWebhookInteractionRequest.md)
- [IncomingWebhookRequestPartial](docs/Model/IncomingWebhookRequestPartial.md)
- [IncomingWebhookUpdateForInteractionCallbackRequestPartial](docs/Model/IncomingWebhookUpdateForInteractionCallbackRequestPartial.md)
- [IncomingWebhookUpdateRequestPartial](docs/Model/IncomingWebhookUpdateRequestPartial.md)
- [InnerErrors](docs/Model/InnerErrors.md)
- [InputText](docs/Model/InputText.md)
- [IntegrationApplicationResponse](docs/Model/IntegrationApplicationResponse.md)
- [IntegrationExpireBehaviorTypes](docs/Model/IntegrationExpireBehaviorTypes.md)
- [IntegrationExpireGracePeriodTypes](docs/Model/IntegrationExpireGracePeriodTypes.md)
- [IntegrationTypes](docs/Model/IntegrationTypes.md)
- [InteractionApplicationCommandAutocompleteCallbackIntegerData](docs/Model/InteractionApplicationCommandAutocompleteCallbackIntegerData.md)
- [InteractionApplicationCommandAutocompleteCallbackNumberData](docs/Model/InteractionApplicationCommandAutocompleteCallbackNumberData.md)
- [InteractionApplicationCommandAutocompleteCallbackStringData](docs/Model/InteractionApplicationCommandAutocompleteCallbackStringData.md)
- [InteractionCallbackTypes](docs/Model/InteractionCallbackTypes.md)
- [InteractionTypes](docs/Model/InteractionTypes.md)
- [InviteApplicationResponse](docs/Model/InviteApplicationResponse.md)
- [InviteChannelRecipientResponse](docs/Model/InviteChannelRecipientResponse.md)
- [InviteChannelResponse](docs/Model/InviteChannelResponse.md)
- [InviteGuildResponse](docs/Model/InviteGuildResponse.md)
- [InviteStageInstanceResponse](docs/Model/InviteStageInstanceResponse.md)
- [InviteTargetTypes](docs/Model/InviteTargetTypes.md)
- [InviteTypes](docs/Model/InviteTypes.md)
- [KeywordRuleResponse](docs/Model/KeywordRuleResponse.md)
- [KeywordTriggerMetadata](docs/Model/KeywordTriggerMetadata.md)
- [KeywordTriggerMetadataResponse](docs/Model/KeywordTriggerMetadataResponse.md)
- [KeywordUpsertRequest](docs/Model/KeywordUpsertRequest.md)
- [KeywordUpsertRequestPartial](docs/Model/KeywordUpsertRequestPartial.md)
- [ListAutoModerationRules200ResponseInner](docs/Model/ListAutoModerationRules200ResponseInner.md)
- [ListChannelInvites200ResponseInner](docs/Model/ListChannelInvites200ResponseInner.md)
- [ListChannelWebhooks200ResponseInner](docs/Model/ListChannelWebhooks200ResponseInner.md)
- [ListGuildChannels200ResponseInner](docs/Model/ListGuildChannels200ResponseInner.md)
- [ListGuildIntegrations200ResponseInner](docs/Model/ListGuildIntegrations200ResponseInner.md)
- [MLSpamRuleResponse](docs/Model/MLSpamRuleResponse.md)
- [MLSpamUpsertRequest](docs/Model/MLSpamUpsertRequest.md)
- [MLSpamUpsertRequestPartial](docs/Model/MLSpamUpsertRequestPartial.md)
- [MentionSpamRuleResponse](docs/Model/MentionSpamRuleResponse.md)
- [MentionSpamTriggerMetadata](docs/Model/MentionSpamTriggerMetadata.md)
- [MentionSpamTriggerMetadataResponse](docs/Model/MentionSpamTriggerMetadataResponse.md)
- [MentionSpamUpsertRequest](docs/Model/MentionSpamUpsertRequest.md)
- [MentionSpamUpsertRequestPartial](docs/Model/MentionSpamUpsertRequestPartial.md)
- [MentionableSelect](docs/Model/MentionableSelect.md)
- [MessageAllowedMentionsRequest](docs/Model/MessageAllowedMentionsRequest.md)
- [MessageAttachmentRequest](docs/Model/MessageAttachmentRequest.md)
- [MessageAttachmentResponse](docs/Model/MessageAttachmentResponse.md)
- [MessageComponentActionRowResponse](docs/Model/MessageComponentActionRowResponse.md)
- [MessageComponentActionRowResponseComponentsInner](docs/Model/MessageComponentActionRowResponseComponentsInner.md)
- [MessageComponentButtonResponse](docs/Model/MessageComponentButtonResponse.md)
- [MessageComponentChannelSelectResponse](docs/Model/MessageComponentChannelSelectResponse.md)
- [MessageComponentEmojiResponse](docs/Model/MessageComponentEmojiResponse.md)
- [MessageComponentInputTextResponse](docs/Model/MessageComponentInputTextResponse.md)
- [MessageComponentMentionableSelectResponse](docs/Model/MessageComponentMentionableSelectResponse.md)
- [MessageComponentRoleSelectResponse](docs/Model/MessageComponentRoleSelectResponse.md)
- [MessageComponentStringSelectResponse](docs/Model/MessageComponentStringSelectResponse.md)
- [MessageComponentTypes](docs/Model/MessageComponentTypes.md)
- [MessageComponentUserSelectResponse](docs/Model/MessageComponentUserSelectResponse.md)
- [MessageCreateRequest](docs/Model/MessageCreateRequest.md)
- [MessageEditRequestPartial](docs/Model/MessageEditRequestPartial.md)
- [MessageEmbedAuthorResponse](docs/Model/MessageEmbedAuthorResponse.md)
- [MessageEmbedFieldResponse](docs/Model/MessageEmbedFieldResponse.md)
- [MessageEmbedFooterResponse](docs/Model/MessageEmbedFooterResponse.md)
- [MessageEmbedImageResponse](docs/Model/MessageEmbedImageResponse.md)
- [MessageEmbedImageResponseHeight](docs/Model/MessageEmbedImageResponseHeight.md)
- [MessageEmbedProviderResponse](docs/Model/MessageEmbedProviderResponse.md)
- [MessageEmbedResponse](docs/Model/MessageEmbedResponse.md)
- [MessageEmbedVideoResponse](docs/Model/MessageEmbedVideoResponse.md)
- [MessageInteractionResponse](docs/Model/MessageInteractionResponse.md)
- [MessageMentionChannelResponse](docs/Model/MessageMentionChannelResponse.md)
- [MessageReactionCountDetailsResponse](docs/Model/MessageReactionCountDetailsResponse.md)
- [MessageReactionEmojiResponse](docs/Model/MessageReactionEmojiResponse.md)
- [MessageReactionResponse](docs/Model/MessageReactionResponse.md)
- [MessageReferenceResponse](docs/Model/MessageReferenceResponse.md)
- [MessageResponse](docs/Model/MessageResponse.md)
- [MessageRoleSubscriptionDataResponse](docs/Model/MessageRoleSubscriptionDataResponse.md)
- [MessageStickerItemResponse](docs/Model/MessageStickerItemResponse.md)
- [MessageType](docs/Model/MessageType.md)
- [MetadataItemTypes](docs/Model/MetadataItemTypes.md)
- [ModalInteractionCallbackData](docs/Model/ModalInteractionCallbackData.md)
- [ModalInteractionCallbackDataComponentsInner](docs/Model/ModalInteractionCallbackDataComponentsInner.md)
- [ModalInteractionCallbackRequest](docs/Model/ModalInteractionCallbackRequest.md)
- [MyGuildResponse](docs/Model/MyGuildResponse.md)
- [NewMemberActionResponse](docs/Model/NewMemberActionResponse.md)
- [NewMemberActionType](docs/Model/NewMemberActionType.md)
- [OAuth2GetAuthorizationResponse](docs/Model/OAuth2GetAuthorizationResponse.md)
- [OAuth2Scopes](docs/Model/OAuth2Scopes.md)
- [OnboardingPromptOptionRequest](docs/Model/OnboardingPromptOptionRequest.md)
- [OnboardingPromptOptionResponse](docs/Model/OnboardingPromptOptionResponse.md)
- [OnboardingPromptResponse](docs/Model/OnboardingPromptResponse.md)
- [OnboardingPromptType](docs/Model/OnboardingPromptType.md)
- [PartialDiscordIntegrationResponse](docs/Model/PartialDiscordIntegrationResponse.md)
- [PartialExternalConnectionIntegrationResponse](docs/Model/PartialExternalConnectionIntegrationResponse.md)
- [PartialGuildSubscriptionIntegrationResponse](docs/Model/PartialGuildSubscriptionIntegrationResponse.md)
- [PongInteractionCallbackRequest](docs/Model/PongInteractionCallbackRequest.md)
- [PremiumGuildTiers](docs/Model/PremiumGuildTiers.md)
- [PremiumTypes](docs/Model/PremiumTypes.md)
- [PrivateApplicationResponse](docs/Model/PrivateApplicationResponse.md)
- [PrivateChannelRequestPartial](docs/Model/PrivateChannelRequestPartial.md)
- [PrivateChannelResponse](docs/Model/PrivateChannelResponse.md)
- [PrivateGroupChannelResponse](docs/Model/PrivateGroupChannelResponse.md)
- [PrivateGuildMemberResponse](docs/Model/PrivateGuildMemberResponse.md)
- [PruneGuildRequest](docs/Model/PruneGuildRequest.md)
- [PurchaseNotificationResponse](docs/Model/PurchaseNotificationResponse.md)
- [QuarantineUserAction](docs/Model/QuarantineUserAction.md)
- [QuarantineUserActionResponse](docs/Model/QuarantineUserActionResponse.md)
- [ReplyMessageReferenceRequest](docs/Model/ReplyMessageReferenceRequest.md)
- [ResolvedObjectsResponse](docs/Model/ResolvedObjectsResponse.md)
- [ResourceChannelResponse](docs/Model/ResourceChannelResponse.md)
- [RichEmbed](docs/Model/RichEmbed.md)
- [RichEmbedAuthor](docs/Model/RichEmbedAuthor.md)
- [RichEmbedField](docs/Model/RichEmbedField.md)
- [RichEmbedFooter](docs/Model/RichEmbedFooter.md)
- [RichEmbedImage](docs/Model/RichEmbedImage.md)
- [RichEmbedProvider](docs/Model/RichEmbedProvider.md)
- [RichEmbedThumbnail](docs/Model/RichEmbedThumbnail.md)
- [RichEmbedVideo](docs/Model/RichEmbedVideo.md)
- [RoleSelect](docs/Model/RoleSelect.md)
- [RoleSelectDefaultValue](docs/Model/RoleSelectDefaultValue.md)
- [ScheduledEventResponse](docs/Model/ScheduledEventResponse.md)
- [ScheduledEventUserResponse](docs/Model/ScheduledEventUserResponse.md)
- [SelectOption](docs/Model/SelectOption.md)
- [SelectOptionResponse](docs/Model/SelectOptionResponse.md)
- [SetChannelPermissionOverwriteRequest](docs/Model/SetChannelPermissionOverwriteRequest.md)
- [SetGuildApplicationCommandPermissionsRequest](docs/Model/SetGuildApplicationCommandPermissionsRequest.md)
- [SetGuildMfaLevelRequest](docs/Model/SetGuildMfaLevelRequest.md)
- [SettingsEmojiResponse](docs/Model/SettingsEmojiResponse.md)
- [SlackWebhook](docs/Model/SlackWebhook.md)
- [SpamLinkRuleResponse](docs/Model/SpamLinkRuleResponse.md)
- [StageInstanceResponse](docs/Model/StageInstanceResponse.md)
- [StageInstancesPrivacyLevels](docs/Model/StageInstancesPrivacyLevels.md)
- [StageScheduledEventCreateRequest](docs/Model/StageScheduledEventCreateRequest.md)
- [StageScheduledEventPatchRequestPartial](docs/Model/StageScheduledEventPatchRequestPartial.md)
- [StageScheduledEventResponse](docs/Model/StageScheduledEventResponse.md)
- [StandardStickerResponse](docs/Model/StandardStickerResponse.md)
- [StickerFormatTypes](docs/Model/StickerFormatTypes.md)
- [StickerPackCollectionResponse](docs/Model/StickerPackCollectionResponse.md)
- [StickerPackResponse](docs/Model/StickerPackResponse.md)
- [StickerTypes](docs/Model/StickerTypes.md)
- [StringSelect](docs/Model/StringSelect.md)
- [TeamMemberResponse](docs/Model/TeamMemberResponse.md)
- [TeamMembershipStates](docs/Model/TeamMembershipStates.md)
- [TeamResponse](docs/Model/TeamResponse.md)
- [TextStyleTypes](docs/Model/TextStyleTypes.md)
- [ThreadAutoArchiveDuration](docs/Model/ThreadAutoArchiveDuration.md)
- [ThreadMemberResponse](docs/Model/ThreadMemberResponse.md)
- [ThreadMetadataResponse](docs/Model/ThreadMetadataResponse.md)
- [ThreadResponse](docs/Model/ThreadResponse.md)
- [ThreadSortOrder](docs/Model/ThreadSortOrder.md)
- [ThreadsResponse](docs/Model/ThreadsResponse.md)
- [UpdateApplicationUserRoleConnectionRequest](docs/Model/UpdateApplicationUserRoleConnectionRequest.md)
- [UpdateAutoModerationRuleRequest](docs/Model/UpdateAutoModerationRuleRequest.md)
- [UpdateChannelRequest](docs/Model/UpdateChannelRequest.md)
- [UpdateDefaultReactionEmojiRequest](docs/Model/UpdateDefaultReactionEmojiRequest.md)
- [UpdateGuildChannelRequestPartial](docs/Model/UpdateGuildChannelRequestPartial.md)
- [UpdateGuildEmojiRequest](docs/Model/UpdateGuildEmojiRequest.md)
- [UpdateGuildMemberRequest](docs/Model/UpdateGuildMemberRequest.md)
- [UpdateGuildOnboardingRequest](docs/Model/UpdateGuildOnboardingRequest.md)
- [UpdateGuildRoleRequest](docs/Model/UpdateGuildRoleRequest.md)
- [UpdateGuildScheduledEventRequest](docs/Model/UpdateGuildScheduledEventRequest.md)
- [UpdateGuildStickerRequest](docs/Model/UpdateGuildStickerRequest.md)
- [UpdateGuildTemplateRequest](docs/Model/UpdateGuildTemplateRequest.md)
- [UpdateGuildWidgetSettingsRequest](docs/Model/UpdateGuildWidgetSettingsRequest.md)
- [UpdateMessageInteractionCallbackRequest](docs/Model/UpdateMessageInteractionCallbackRequest.md)
- [UpdateMyGuildMemberRequest](docs/Model/UpdateMyGuildMemberRequest.md)
- [UpdateOnboardingPromptRequest](docs/Model/UpdateOnboardingPromptRequest.md)
- [UpdateSelfVoiceStateRequest](docs/Model/UpdateSelfVoiceStateRequest.md)
- [UpdateSelfVoiceStateRequestChannelId](docs/Model/UpdateSelfVoiceStateRequestChannelId.md)
- [UpdateStageInstanceRequest](docs/Model/UpdateStageInstanceRequest.md)
- [UpdateThreadRequestPartial](docs/Model/UpdateThreadRequestPartial.md)
- [UpdateThreadTagRequest](docs/Model/UpdateThreadTagRequest.md)
- [UpdateVoiceStateRequest](docs/Model/UpdateVoiceStateRequest.md)
- [UpdateWebhookByTokenRequest](docs/Model/UpdateWebhookByTokenRequest.md)
- [UpdateWebhookRequest](docs/Model/UpdateWebhookRequest.md)
- [UserCommunicationDisabledAction](docs/Model/UserCommunicationDisabledAction.md)
- [UserCommunicationDisabledActionMetadata](docs/Model/UserCommunicationDisabledActionMetadata.md)
- [UserCommunicationDisabledActionMetadataResponse](docs/Model/UserCommunicationDisabledActionMetadataResponse.md)
- [UserCommunicationDisabledActionResponse](docs/Model/UserCommunicationDisabledActionResponse.md)
- [UserGuildOnboardingResponse](docs/Model/UserGuildOnboardingResponse.md)
- [UserNotificationSettings](docs/Model/UserNotificationSettings.md)
- [UserPIIResponse](docs/Model/UserPIIResponse.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserSelect](docs/Model/UserSelect.md)
- [UserSelectDefaultValue](docs/Model/UserSelectDefaultValue.md)
- [VanityURLErrorResponse](docs/Model/VanityURLErrorResponse.md)
- [VanityURLResponse](docs/Model/VanityURLResponse.md)
- [VerificationLevels](docs/Model/VerificationLevels.md)
- [VideoQualityModes](docs/Model/VideoQualityModes.md)
- [VoiceRegionResponse](docs/Model/VoiceRegionResponse.md)
- [VoiceScheduledEventCreateRequest](docs/Model/VoiceScheduledEventCreateRequest.md)
- [VoiceScheduledEventPatchRequestPartial](docs/Model/VoiceScheduledEventPatchRequestPartial.md)
- [VoiceScheduledEventResponse](docs/Model/VoiceScheduledEventResponse.md)
- [WebhookSlackEmbed](docs/Model/WebhookSlackEmbed.md)
- [WebhookSlackEmbedField](docs/Model/WebhookSlackEmbedField.md)
- [WebhookSourceChannelResponse](docs/Model/WebhookSourceChannelResponse.md)
- [WebhookSourceGuildResponse](docs/Model/WebhookSourceGuildResponse.md)
- [WebhookTypes](docs/Model/WebhookTypes.md)
- [WelcomeMessageResponse](docs/Model/WelcomeMessageResponse.md)
- [WelcomeScreenPatchRequestPartial](docs/Model/WelcomeScreenPatchRequestPartial.md)
- [WidgetActivity](docs/Model/WidgetActivity.md)
- [WidgetChannel](docs/Model/WidgetChannel.md)
- [WidgetImageStyles](docs/Model/WidgetImageStyles.md)
- [WidgetMember](docs/Model/WidgetMember.md)
- [WidgetResponse](docs/Model/WidgetResponse.md)
- [WidgetSettingsResponse](docs/Model/WidgetSettingsResponse.md)
- [WidgetUserDiscriminator](docs/Model/WidgetUserDiscriminator.md)

## Authorization

### BotToken

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### OAuth2

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `discord.com/oauth2/authorize`
- **Scopes**: 
    - **activities.read**: allows your app to fetch data from a user's \"Now Playing/Recently Played\" list - requires Discord approval
    - **activities.write**: allows your app to update a user's activity - requires Discord approval (NOT REQUIRED FOR GAMESDK ACTIVITY MANAGER)
    - **applications.builds.read**: allows your app to read build data for a user's applications
    - **applications.builds.upload**: allows your app to upload/update builds for a user's applications - requires Discord approval
    - **applications.commands**: allows your app to use commands in a guild
    - **applications.commands.permissions.update**: allows your app to update permissions for its commands in a guild a user has permissions to
    - **applications.entitlements**: allows your app to read entitlements for a user's applications
    - **applications.store.update**: allows your app to read and update store data (SKUs, store listings, achievements, etc.) for a user's applications
    - **bot**: for oauth2 bots, this puts the bot in the user's selected guild by default
    - **connections**: allows /users/@me/connections to return linked third-party accounts
    - **dm_channels.read**: allows your app to see information about the user's DMs and group DMs - requires Discord approval
    - **email**: enables /users/@me to return an email
    - **gdm.join**: allows your app to join users to a group dm
    - **guilds**: allows /users/@me/guilds to return basic information about all of a user's guilds
    - **guilds.join**: allows /guilds/{guild.id}/members/{user.id} to be used for joining users to a guild
    - **guilds.members.read**: allows /users/@me/guilds/{guild.id}/member to return a user's member information in a guild
    - **identify**: allows /users/@me without email
    - **messages.read**: for local rpc server api access, this allows you to read messages from all client channels (otherwise restricted to channels/guilds your app creates)
    - **relationships.read**: allows your app to know a user's friends and implicit relationships - requires Discord approval
    - **rpc**: for local rpc server access, this allows you to control a user's local Discord client - requires Discord approval
    - **rpc.activities.write**: for local rpc server access, this allows you to update a user's activity - requires Discord approval
    - **rpc.notifications.read**: for local rpc server access, this allows you to receive notifications pushed out to the user - requires Discord approval
    - **rpc.screenshare.read**: for local rpc server access, this allows you to read a user's screenshare status- requires Discord approval
    - **rpc.screenshare.write**: for local rpc server access, this allows you to update a user's screenshare settings- requires Discord approval
    - **rpc.video.read**: for local rpc server access, this allows you to read a user's video status - requires Discord approval
    - **rpc.video.write**: for local rpc server access, this allows you to update a user's video settings - requires Discord approval
    - **rpc.voice.read**: for local rpc server access, this allows you to read a user's voice settings and listen for voice events - requires Discord approval
    - **rpc.voice.write**: for local rpc server access, this allows you to update a user's voice settings - requires Discord approval
    - **voice**: allows your app to connect to voice on user's behalf and see all the voice members - requires Discord approval
    - **webhook.incoming**: this generates a webhook that is returned in the oauth token response for authorization code grants


### OAuth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **activities.read**: allows your app to fetch data from a user's \"Now Playing/Recently Played\" list - requires Discord approval
    - **activities.write**: allows your app to update a user's activity - requires Discord approval (NOT REQUIRED FOR GAMESDK ACTIVITY MANAGER)
    - **applications.builds.read**: allows your app to read build data for a user's applications
    - **applications.builds.upload**: allows your app to upload/update builds for a user's applications - requires Discord approval
    - **applications.commands**: allows your app to use commands in a guild
    - **applications.commands.permissions.update**: allows your app to update permissions for its commands in a guild a user has permissions to
    - **applications.commands.update**: allows your app to update its commands using a Bearer token - client credentials grant only
    - **applications.entitlements**: allows your app to read entitlements for a user's applications
    - **applications.store.update**: allows your app to read and update store data (SKUs, store listings, achievements, etc.) for a user's applications
    - **bot**: for oauth2 bots, this puts the bot in the user's selected guild by default
    - **connections**: allows /users/@me/connections to return linked third-party accounts
    - **dm_channels.read**: allows your app to see information about the user's DMs and group DMs - requires Discord approval
    - **email**: enables /users/@me to return an email
    - **gdm.join**: allows your app to join users to a group dm
    - **guilds**: allows /users/@me/guilds to return basic information about all of a user's guilds
    - **guilds.join**: allows /guilds/{guild.id}/members/{user.id} to be used for joining users to a guild
    - **guilds.members.read**: allows /users/@me/guilds/{guild.id}/member to return a user's member information in a guild
    - **identify**: allows /users/@me without email
    - **messages.read**: for local rpc server api access, this allows you to read messages from all client channels (otherwise restricted to channels/guilds your app creates)
    - **relationships.read**: allows your app to know a user's friends and implicit relationships - requires Discord approval
    - **rpc**: for local rpc server access, this allows you to control a user's local Discord client - requires Discord approval
    - **rpc.activities.write**: for local rpc server access, this allows you to update a user's activity - requires Discord approval
    - **rpc.notifications.read**: for local rpc server access, this allows you to receive notifications pushed out to the user - requires Discord approval
    - **rpc.screenshare.read**: for local rpc server access, this allows you to read a user's screenshare status- requires Discord approval
    - **rpc.screenshare.write**: for local rpc server access, this allows you to update a user's screenshare settings- requires Discord approval
    - **rpc.video.read**: for local rpc server access, this allows you to read a user's video status - requires Discord approval
    - **rpc.video.write**: for local rpc server access, this allows you to update a user's video settings - requires Discord approval
    - **rpc.voice.read**: for local rpc server access, this allows you to read a user's voice settings and listen for voice events - requires Discord approval
    - **rpc.voice.write**: for local rpc server access, this allows you to update a user's voice settings - requires Discord approval
    - **voice**: allows your app to connect to voice on user's behalf and see all the voice members - requires Discord approval
    - **webhook.incoming**: this generates a webhook that is returned in the oauth token response for authorization code grants


### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `discord.com/oauth2/authorize`
- **Scopes**: 
    - **activities.read**: allows your app to fetch data from a user's \"Now Playing/Recently Played\" list - requires Discord approval
    - **activities.write**: allows your app to update a user's activity - requires Discord approval (NOT REQUIRED FOR GAMESDK ACTIVITY MANAGER)
    - **applications.builds.read**: allows your app to read build data for a user's applications
    - **applications.builds.upload**: allows your app to upload/update builds for a user's applications - requires Discord approval
    - **applications.commands**: allows your app to use commands in a guild
    - **applications.commands.permissions.update**: allows your app to update permissions for its commands in a guild a user has permissions to
    - **applications.entitlements**: allows your app to read entitlements for a user's applications
    - **applications.store.update**: allows your app to read and update store data (SKUs, store listings, achievements, etc.) for a user's applications
    - **bot**: for oauth2 bots, this puts the bot in the user's selected guild by default
    - **connections**: allows /users/@me/connections to return linked third-party accounts
    - **dm_channels.read**: allows your app to see information about the user's DMs and group DMs - requires Discord approval
    - **email**: enables /users/@me to return an email
    - **gdm.join**: allows your app to join users to a group dm
    - **guilds**: allows /users/@me/guilds to return basic information about all of a user's guilds
    - **guilds.join**: allows /guilds/{guild.id}/members/{user.id} to be used for joining users to a guild
    - **guilds.members.read**: allows /users/@me/guilds/{guild.id}/member to return a user's member information in a guild
    - **identify**: allows /users/@me without email
    - **messages.read**: for local rpc server api access, this allows you to read messages from all client channels (otherwise restricted to channels/guilds your app creates)
    - **relationships.read**: allows your app to know a user's friends and implicit relationships - requires Discord approval
    - **role_connections.write**: allows your app to update a user's connection and metadata for the app
    - **rpc**: for local rpc server access, this allows you to control a user's local Discord client - requires Discord approval
    - **rpc.activities.write**: for local rpc server access, this allows you to update a user's activity - requires Discord approval
    - **rpc.notifications.read**: for local rpc server access, this allows you to receive notifications pushed out to the user - requires Discord approval
    - **rpc.screenshare.read**: for local rpc server access, this allows you to read a user's screenshare status- requires Discord approval
    - **rpc.screenshare.write**: for local rpc server access, this allows you to update a user's screenshare settings- requires Discord approval
    - **rpc.video.read**: for local rpc server access, this allows you to read a user's video status - requires Discord approval
    - **rpc.video.write**: for local rpc server access, this allows you to update a user's video settings - requires Discord approval
    - **rpc.voice.read**: for local rpc server access, this allows you to read a user's voice settings and listen for voice events - requires Discord approval
    - **rpc.voice.write**: for local rpc server access, this allows you to update a user's voice settings - requires Discord approval
    - **voice**: allows your app to connect to voice on user's behalf and see all the voice members - requires Discord approval
    - **webhook.incoming**: this generates a webhook that is returned in the oauth token response for authorization code grants

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `10`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
