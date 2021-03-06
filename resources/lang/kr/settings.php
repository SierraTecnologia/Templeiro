<?php

return [

    /**
     * Settings text strings
     * Contains all text strings used in the general settings sections of App
     * including users and roles.
     */

    'settings' => '설정',
    'settings_save' => '설정 저장',
    'settings_save_success' => '설정이 저장되었습니다.',

    /**
     * App settings
     */

    'app_settings' => '앱 설정',
    'app_name' => '어플리케이션 이름',
    'app_name_desc' => '해당 이름은 헤더와 모든 이메일에 표시됩니다.',
    'app_name_header' => '헤더에 어플리케이션 이름을 표시하시겠습니까?',
    'app_public_viewing' => '공개 보기를 허용하시겠습니까?',
    'app_secure_images' => '더 높은 보안 이미지 업로드를 사용하시겠습니까?',
    'app_secure_images_desc' => '성능상의 이유로 모든 이미지를 공개합니다. 해당 옵션은 이미지 URL 앞에 추측하기 어려운 임의의 문자열을 추가합니다. 간편한 접근을 방지하기 위해 디렉토리 색인을 비활성화하십시오.',
    'app_editor' => '페이지 에디터',
    'app_editor_desc' => '모든 사용자가 페이지를 편집하는데 사용할 에디터를 선택하십시오.',
    'app_custom_html' => '사용자 정의 HTML 헤드 컨텐츠',
    'app_custom_html_desc' => '여기에 추가된 모든 내용은 모든 페이지의 <head> 섹션 아래쪽에 삽입됩니다. 이는 스타일 오버라이딩이나 분석 코드 삽입에 편리합니다.',
    'app_logo' => '어플리케이션 로고',
    'app_logo_desc' => '해당 이미지는 반드시 높이가 43픽셀이어야 합니다. <br>대용량 이미지는 축소됩니다.',
    'app_primary_color' => '어플리케이션 기본 색상',
    'app_primary_color_desc' => '해당 값은 16진수이어야 합니다. <br>입력하지 않으면 기본 색상으로 재설정됩니다.',
    'app_homepage' => '어플리케이션 홈페이지',
    'app_homepage_desc' => '기본 화면 대신에 홈페이지에 표시할 화면을 선택하십시오. 선택된 페이지에서는 페이지 권한이 무시됩니다.',
    'app_homepage_select' => '페이지를 선택하십시오',
    'app_disable_comments' => '주석 비활성화',
    'app_disable_comments_desc' => '어플리케이션의 모든 페이지에서 주석을 비활성화합니다. 기존의 주석은 표시되지 않습니다.',
    /**
     * Registration settings
     */
    'reg_settings' => '등록 설정',
    'reg_allow' => '등록을 허가하시겠습니까?',
    'reg_default_role' => '등록 후 기본 사용자 역할',
    'reg_confirm_email' => '이메일 확인을 요구하시겠습니까?',
    'reg_confirm_email_desc' => '도메인 제한이 사용되면 이메일 확인이 요구되며, 하단의 값은 무시됩니다.',
    'reg_confirm_restrict_domain' => '도메인 등록 제한',
    'reg_confirm_restrict_domain_desc' => '등록을 제한할 이메일 도메인의 목록을 쉼표로 구분하여 입력해주십시오. 사용자는 어플리케이션과의 상호작용을 허가받기 전에 이메일 주소를 확인하는 이메일을 받게 됩니다, <br> 등록이 완료된 후에는 이메일 주소를 변경할 수 있습니다.',
    'reg_confirm_restrict_domain_placeholder' => '제한 없음 설정',
    /**
     * Maintenance settings
     */

    'maint' => 'Maintenance',
    'maint_image_cleanup' => '이미지 정리',
    'maint_image_cleanup_desc' => "페이지를 스캔하여 현재 사용중인 이미지와 도면에서 수정된 내용 및 중복된 이미지를 확인합니다. 이를 실행하기 전에 전체 데이터베이스와 이미지의 백업을 작성했는지 확인하십시오.",
    'maint_image_cleanup_ignore_revisions' => '수정본의 이미지를 무시합니다.',
    'maint_image_cleanup_run' => '정리 실행',
    'maint_image_cleanup_warning' => '잠재적으로 사용되지 않는 이미지를 찾았습니다. 해당 이미지들을 삭제하시겠습니까?',
    'maint_image_cleanup_success' => ':잠재적으로 사용되지 않는 이미지들이 삭제되었습니다.',
    'maint_image_cleanup_nothing_found' => '사용되지 않는 이미지를 찾을 수 없습니다. 아무것도 삭제되지 않았습니다.',
    /**
     * Role settings
     */
    'roles' => '역할',
    'role_user_roles' => '사용자 역할',
    'role_create' => '신규 역할 생성',
    'role_create_success' => '역할이 생성되었습니다.',
    'role_delete' => '역할을 삭제합니다.',
    'role_delete_confirm' => '\':roleName\'(이)라는 이름의 역할이 삭제됩니다.',
    'role_delete_users_assigned' => '해당 역할에 :userCount 명의 사용자가 할당되어 있습니다. 이 역할로부터 사용자를 재할당하고 싶다면 아래에서 새 역할을 선택하십시오.',
    'role_delete_no_migration' => "사용자 재배치 안함",
    'role_delete_sure' => '이 역할을 삭제하시겠습니까?',
    'role_delete_success' => '역할이 삭제되었습니다.',
    'role_edit' => '역할 편집',
    'role_details' => '역할 상세정보',
    'role_name' => '역할명',
    'role_desc' => '역할에 대한 간략한 설명',
    'role_external_auth_id' => '외부 인증 ID',
    'role_system' => '시스템 권한',
    'role_manage_users' => '사용자 관리',
    'role_manage_roles' => '역할 및 역할 권한 관리',
    'role_manage_entity_permissions' => '모든 책, 챕터, 페이지 관리',
    'role_manage_own_entity_permissions' => '보유한 책, 챕터, 페이지에 대한 권한 관리',
    'role_manage_settings' => '어플리케이선 설정 관리',
    'role_asset' => '자산 관리',
    'role_asset_desc' => '해당 권한들은 시스템 내의 Assets 파일에 대한 기본적인 접근을 제어합니다.',
    'role_asset_admins' => '관리자는 모든 컨텐츠에 대한 접근 권한을 자동으로 부여받지만, 해당 옵션들은 UI 옵션을 표시하거나 숨길 수 있습니다.',
    'role_all' => '전체',
    'role_own' => '보유한 것만',
    'role_controlled_by_asset' => '업로드된 Assets 파일에 의해 제어됩니다.',
    'role_save' => '역할 저장',
    'role_update_success' => '역할이 업데이트되었습니다.',
    'role_users' => '해당 역할의 사용자',
    'role_users_none' => '현재 이 역할에 할당된 사용자가 없습니다.',
    /**
     * Users
     */
    'users' => '사용자',
    'user_profile' => '사용자 프로필',
    'users_add_new' => '사용자 추가',
    'users_search' => '사용자 검색',
    'users_role' => '사용자 역할',
    'users_external_auth_id' => '외부 인증 ID',
    'users_password_warning' => '비밀번호를 변경하시려면 다음을 입력하십시오:',
    'users_system_public' => '이 사용자는 당신의 인스턴스를 방문하는 게스트 사용자를 나타냅니다. 로그인하는 데는 사용할 수 없지만 자동으로 할당됩니다.',
    'users_delete' => '사용자 삭제',
    'users_delete_named' => '사용자 :userName 삭제',
    'users_delete_warning' => '시스템에서 \':userName\'(이)라는 사용자가 완전히 삭제됩니다.',
    'users_delete_confirm' => '이 사용자를 삭제하시겠습니까?',
    'users_delete_success' => '사용자가 삭제되었습니다.',
    'users_edit' => '사용자 편집',
    'users_edit_profile' => '프로필 편집',
    'users_edit_success' => '사용자가 업데이트되었습니다.',
    'users_avatar' => '사용자 아바타',
    'users_avatar_desc' => '해당 이미지는 256픽셀의 정사각형 이미지여야합니다.',
    'users_preferred_language' => '선호하는 언어',
    'users_social_accounts' => '소셜 계정',
    'users_social_accounts_info' => '여기에서 다른 계정을 연결하여 더 빠르고 쉽게 로그인할 수 있습니다. 여기에서 계정 연결을 해제하면 이전에 승인된 접근이 제공되지 않습니다 연결된 소셜 계정의 프로필 설정에서 접근 권한을 취소하십시오.',
    'users_social_connect' => '계정 연결',
    'users_social_disconnect' => '계정 연결 해제',
    'users_social_connected' => ':socialAccount 계정이 당신의 프로필에 연결되었습니다.',
    'users_social_disconnected' => ':socialAccount 계정이 당신의 프로필에서 연결해제되었습니다.',
];