
## Use e-mail instead of the username for authentication

If you want to use e-mail instead of username for authentication, override default User bundle configuration :

```yaml
# app/config/config.yml
asf_user:
    email_as_username: true
```

You must then specify to FOSUserBundle the attribute for authentication :

```yaml
# app/config/security.yml
security:
    providers:
        fos_userbundle:
            id: fos_user.user_provider.username_email
```

