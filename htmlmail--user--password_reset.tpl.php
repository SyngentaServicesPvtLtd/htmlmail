<?php

/**
 * @file
 * Sample template for sending user password reset messages with HTML Mail
 *
 * The following variables are available in this template:
 *
 *  - $message_id: The email message id, which is 'user_password_reset'
 *  - $module: The sending module, which is 'user'.
 *  - $key: The user email action, which is 'password_reset'.
 *  - $headers: An array of email (name => value) pairs.
 *  - $from: The configured sender address.
 *  - $to: The recipient email address.
 *  - $subject: The message subject line.
 *  - $body: The formatted message body.
 *  - $language: The language object for this message.
 *  - $params: An array containing the following keys:
 *    - account: The user object whose password is being requested, which
 *      contains the following useful properties:
 *      - uid: The user-id number.
 *      - name: The user login name.
 *      - mail: The user email address.  Should be the same as $to.
 *      - theme: The user-chosen theme, or a blank string if unset.
 *      - signature: The user signature block.
 *      - signature_format: The text input filter used to format the signature.
 *      - created: Account creation date, as a unix timestamp.
 *      - access: Account access date, as a unix timestamp.
 *      - login: Account login date, as a unix timestamp.
 *      - status: Integer 0 = disabled; 1 = enabled.
 *      - timezone: User timezone, or NULL if unset.
 *      - language: User language, or blank string if unset.
 *      - picture: Path to user picture, or blank string if unset.
 *      - init: The email address used to initially register this account.
 *      - data: User profile data, as a serialized string.
 *      - roles: Array of roles assigned to this user, as (rid => role_name)
 *        pairs.
 *  - $template_path: The relative path to the template directory.
 *  - $template_url: The absolute url to the template directory.
 *  - $theme: The name of the selected Email theme.
 *  - $theme_path: The relative path to the Email theme directory.
 *  - $theme_url: The absolute url to the Email theme directory.
 */
?>
<div class="htmlmail-user-password-reset-body htmlmail-user-body htmlmail-body">
<?php echo $body; ?>
</div>
<?php if ($debug): ?>
<hr />
<div class="htmlmail-user-password-reset-debug htmlmail-user-debug htmlmail-debug">
  <dl><dt><p>
    To customize your user password reset messages:
  </p></dt><dd><ol><li><p><?php if (empty($theme)): ?>
    Visit <u>admin/config/system/htmlmail</u>
    and select a theme to hold your custom email template files.
  </p></li><li><p><?php elseif (empty($theme_path)): ?>
    Visit <u>admin/build/themes</u>
    to enable your selected <u><?php echo ucfirst($theme); ?></u> theme.
  </p></li><li><p><?php endif; ?>
    Copy the
    <a href="http://drupalcode.org/project/htmlmail.git/blob_plain/refs/heads/7.x-2.x:/htmlmail--user--password_reset.tpl.php"><code>htmlmail--user--password_reset.tpl.php</code></a>
    file to your <u><?php echo ucfirst($theme); ?></u> theme directory
    <u><code><?php echo $theme_path; ?></code></u>.
  </p></dd></dl></li></ul></li><li><p>
    Edit the copied file.
  </p></li></ul></dd><dt><p>
    The user module sets the <u><code>$params</code></u> variable.
    For this message,
  </p></dt><dd><p><code><pre>
$params = <?php var_export($params); ?>
  </pre></code></p></dd></dl>
</div>
<?php endif;
