# WCF Sessions Auth Bundle
This allows you to use WCF as a authentication provider in Symfony >= 4 and share its sessions.

## Configuration
File `config/packages/wcf_sessions_auth.yaml`:
```yaml
wcf_sessions_auth:
  session:
    cookie_prefix: "wsc_"
    login_page: "/login"
    target_page: "/"
    force_login: false
    ip_check: 0
  database:
    entity_manager: "forum"
    table_prefix: "wcf1_"

  roles:
    1: ROLE_ANYONE
    2: ROLE_GUEST
    3: ROLE_USER
    4: ROLE_ADMIN
  ```
  
  File `config/packages/security.yaml`:
  ```yaml
security:
  providers:
    wcf:
      id: "wcf.sessionsauthbundle.wcf_user_provider"

  encoders:
    xanily\WCFSessionsAuthBundle\Entity\WcfUser:
      id: wcf.sessionsauthbundle.wcf_encoder
  firewalls:
    main:
      anonymous: ~

      # stateless should be set to true, or your symfony user may be stored in the session even if you logged out from the wcf instance
      stateless: true
      
      guard:
        authenticators:
          - "wcf.sessionsauthbundle.wcf_session_guard"
          - "wcf.sessionsauthbundle.wcf_authenticator"
        
        entry_point: "wcf.sessionsauthbundle.wcf_authenticator"

  # Example configuration for admin only access to www.example.com/admin
  access_control:
    - { path: ^/admin, roles: [ROLE_ADMIN], host: "www.example.com" }
  ```
  
  Example config for `config/packages/doctrine.yaml`:
  ```yaml
  doctrine:
    dbal:
      default_connection: default
      
      connections:
        default:
          driver: 'pdo_mysql'
          server_version: '5.7'
          charset: utf8mb4
          url: '%env(resolve:DATABASE_URL)%'
          schema_filter: ~^(?!wcf1_)~

        board:
          driver: 'pdo_mysql'
          server_version: '5.7'
          charset: utf8mb4
          url: '$env(resolve:BOARD_DATABASE_URL)%'
          
    orm:
      default_entity_manager: default
      auto_generate_proxy_classes: '%kernel.debug%'
      
      entity_managers:
        default:
          connection: default
          naming_strategy: doctrine.ormnaming_strategy.underscore
          auto_mapping: true
          mappings:
            App:
              is_bundle: false
              type: annotation
              dir: '%kernel.project_dir%/src/Entity'
              prefix: 'App\Entity'
              alias: App
        
        board:
          connection: board
          mappings:
            WCFSessionsAuthBundle: ~
  ```