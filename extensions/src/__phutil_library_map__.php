<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'BMOExternalAccountSearchConduitAPIMethod' => 'conduit/BMOExternalAccountSearchConduitAPIMethod.php',
    'BugzillaAccountSearchConduitAPIMethod' => 'conduit/BugzillaAccountSearchConduitAPIMethod.php',
    'CreatePolicyConduitAPIMethod' => 'conduit/CreatePolicyConduitAPIMethod.php',
    'DifferentialBugzillaBugIDCommitMessageField' => 'differential/customfield/DifferentialBugzillaBugIDCommitMessageField.php',
    'DifferentialBugzillaBugIDCustomFieldTestCase' => 'differential/customfield/__tests__/DifferentialBugzillaIdCustomFieldTestCase.php',
    'DifferentialBugzillaBugIDField' => 'differential/customfield/DifferentialBugzillaBugIDField.php',
    'DifferentialBugzillaBugIDValidator' => 'differential/customfield/DifferentialBugzillaBugIDValidator.php',
    'DoorkeeperRevisionFeedWorker' => 'doorkeeper/worker/DoorkeeperRevisionFeedWorker.php',
    'FeedQueryIDConduitAPIMethod' => 'conduit/FeedQueryIDConduitAPIMethod.php',
    'PhabricatorFeedIDQuery.php' => 'feed/query/PhabricatorFeedIDQuery.php',
    'MozLogger' => 'logging/MozLogger.php',
    'PhabricatorBMOAuthAdapter' => 'auth/PhabricatorBMOAuthAdapter.php',
    'PhabricatorBMOAuthAdapterTestCase' => 'auth/__tests__/PhabricatorBMOAuthAdapterTestCase.php',
    'PhabricatorBMOAuthProvider' => 'auth/PhabricatorBMOAuthProvider.php',
    'PhabricatorBMOAuthProviderTestCase' => 'auth/__tests__/PhabricatorBMOAuthProviderTestCase.php',
    'PhabricatorBugzillaConfigOptions' => 'bugzilla/config/PhabricatorBugzillaConfigOptions.php',
  ),
  'function' => array(),
  'xmap' => array(
    'BMOExternalAccountSearchConduitAPIMethod' => 'UserConduitAPIMethod',
    'BugzillaAccountSearchConduitAPIMethod' => 'UserConduitAPIMethod',
    'CreatePolicyConduitAPIMethod' => 'ConduitAPIMethod',
    'DifferentialBugzillaBugIDCommitMessageField' => 'DifferentialCommitMessageCustomField',
    'DifferentialBugzillaBugIDCustomFieldTestCase' => 'PhabricatorTestCase',
    'DifferentialBugzillaBugIDField' => 'DifferentialStoredCustomField',
    'DifferentialBugzillaBugIDValidator' => 'Phobject',
    'DoorkeeperRevisionFeedWorker' => 'DoorkeeperFeedWorker',
    'FeedQueryIDConduitAPIMethod' => 'FeedQueryConduitAPIMethod',
    'PhabricatorFeedIDQuery.php' => 'PhabricatorFeedQuery',
    'MozLogger' => 'Phobject',
    'PhabricatorBMOAuthAdapter' => 'PhutilAuthAdapter',
    'PhabricatorBMOAuthAdapterTestCase' => 'PhabricatorTestCase',
    'PhabricatorBMOAuthProvider' => 'PhabricatorAuthProvider',
    'PhabricatorBMOAuthProviderTestCase' => 'PhabricatorTestCase',
    'PhabricatorBugzillaConfigOptions' => 'PhabricatorApplicationConfigOptions',
  ),
));
