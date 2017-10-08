<?php
/*

*/
class qa_ss_admin_config
{
  function admin_form(&$qa_content)
  {
    $saved=false;

    if (qa_clicked('ss_save_button')) {
      qa_opt('ss_api_enabled', (bool) qa_post_text('ss_api_enabled_cb'));
      qa_opt('ss_api_key', qa_post_text('ss_api_key_field'));
      qa_opt('ss_api_domain', qa_post_text('ss_api_domain_field'));
      $saved=true;
    }

    return array(
      'ok' => $saved ? 'Social Share settings saved' : null,

      'fields' => array(
        array(
          'label' => 'Do you want to enable send email via Social Share?',
          'type' => 'checkbox',
          'value' => (bool)qa_opt('ss_api_enabled'),
          'tags' => 'NAME="ss_api_enabled_cb"',
        ),
        array(
          'label' => 'Social Share Key:',
          'value' => qa_html(qa_opt('ss_api_key')),
          'tags' => 'name="ss_api_key_field"',
        ),
        array(
          'label' => 'Your domain',
          'value' => qa_html(qa_opt('ss_api_domain')),
          'tags' => 'name="ss_api_domain_field"',
        ),
      ),

      'buttons' => array(
        array(
          'label' => 'Save Changes',
          'tags' => 'name="ss_save_button"',
        ),
      ),
    );
  }
}