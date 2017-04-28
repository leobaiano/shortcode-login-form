# Shortcode Login Form
WordPress Plugin Shortcode Login Form

## Description

This WordPress plugin creates a shortcode to add the login form wherever you wish.

## How to use

To use, simply insert the `[lb-login-form]` shotcode into content pages or posts and it will create a login form.

The shotcode has the following attributes:

`message_logged` - Sets the text that will appear if the user is logged in (default: Logged in!)
`label_username` - Sets the text of the field to enter the user (default: Username)
`label_password` - Sets the field text to enter the password (default: Password)
`label_remember` - Sets the link text to retrieve the password (default: Remember Me)
`label_log_in` - Sets the button text to login (default: Log in)

If the attribute is not passed the default value is used.

Example of how to call the shortcode by passing the attributes:

`[Lb-login-form message_logged="Logged in!" label_username="Username" label_password="Password" label_remember="Remember Me" label_log_in="Log in"]`
