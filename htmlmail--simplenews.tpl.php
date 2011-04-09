<?php

/**
 * @file
 * Sample template for sending Simplenews messages with HTML Mail.
 *
 * The following variables are available in this template:
 *
 *  - $message_id: The email message id, or "simplenews_$key"
 *  - $module: The sending module, or 'simplenews'.
 *  - $key: The simplenews action, which may be any of the following:
 *    - node: Send a newsletter to its subscribers.
 *    - subscribe: New subscriber confirmation message.
 *    - test: Send a test newsletter to the test address.
 *    - unsubscribe: Unsubscribe confirmation message.
 *  - $to: The recipient subscriber email address.
 *  - $from: The configured sender address.
 *  - $language: The language code for this message.
 *  - $params: An array containing the following keys:
 *    - context:  An array containing the following keys:
 *      - account: The recipient subscriber account object, which contains
 *        the following useful properties:
 *        - snid: The simplenews subscriber id, or NULL for test messages.
 *        - name: The subscriber username, or NULL.
 *        - activated: The date this subscription became active, or NULL.
 *        - uid: The subscriber user id, or NULL.
 *        - mail: The subscriber email address; same as $message['to'].
 *        - language: The subscriber language code.
 *        - tids: An array of taxonomy term ids.
 *        - newsletter_subscription: An array of subscription ids.
 *      - node: The simplenews newsletter node object, which contains the
 *        following useful properties:
 *        - changed: The node last-modified date, as a unix timestamp.
 *        - created: The node creation date, as a unix timestamp.
 *        - name: The username of the node publisher.
 *        - nid: The node id.
 *        - title: The node title.
 *        - uid: The user ID of the node publisher.
 *      - newsletter: The simplenews newsletter object, which contains the
 *        following useful properties:
 *        - nid: The node ID of the newsletter node.
 *        - name: The short name of the newsletter.
 *        - description: The long name or description of the newsletter.
 *  - $subject: The message subject line.
 *  - $body: The formatted message body.
 *  - $headers: An array of email (name => value) pairs.
 *  - $directory: The relative path to the template directory.
 */
?>
<?php if ($key == 'node' || $key == 'test'): ?>
<div class="htmlmail-simplenews-link">
  <a href="<?php echo url('node/' . $params['context']['node']->nid,
                   array('absolute' => TRUE)); ?>">
    Click here to view this message on the web.
  </a>
</div>
<?php endif; ?>
<div class="htmlmail-simplenews-body htmlmail-body">
<?php print $body; ?>
</div>
<?php if ($debug): ?>
<hr />
<div class="htmlmail-simplenews-debug htmlmail-debug">
  <dl><dt><p>
    To customize your simplenews messages:
  </p></dt><dd><ol><li><p>
    Copy
    <a href="http://drupalcode.org/project/htmlmail.git/blob/refs/heads/7.x-2.x:/htmlmail--simplenews.tpl.php"><code>htmlmail--simplenews.tpl.php</code></a>
    to the <u><code><php echo realpath($directory); ?></code></u>
    directory of your <q><?php echo ucfirst($theme) ?> theme</q>.
  </p></li><li><p>
    Rename your copied file to one of the following:
  </p><ul><li><dl><dt><p>
    <u><code>htmlmail--simplenews--node.tpl.php</code></u>
  </p></dt><dd><p>
    Regular newsletter template.
  </p></dd></dl></li><li><dl><dt><p>
    <u><code>htmlmail--simplenews--subscribe.tpl.php</code></u>
  </p></dt><dd><p>
    New subscriber confirmation message.
  </p></dd></dl></li><li><dl><dt><p>
    <u><code>htmlmail--simplenews--test.tpl.php</code></u>
  </p></dt><dd><p>
    Test newsletter.
  </p></dd></dl></li><li><dl><dt><p>
    <u><code>htmlmail--simplenews--unsubscribe.tpl.php</code></u>
  </p></dt><dd><p>
    Unsubscribe confirmation message.
  </p></dd></dl></li></ul></li><li><p>
    Edit your copy of the <u><code>htmlmail--simplenews.tpl.php</code></u> file.
  </p></li></ul></dd><dt><p>
    Simplenews sets the <code>$params</code> variable.  For this message,
  </p></dt><dd><p><code><pre>
$params = <?php var_export($params); ?>
  </pre></code></p></dd></dl>
</div>
<?php endif;

