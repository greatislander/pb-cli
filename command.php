<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

require_once __DIR__ . '/inc/ScaffoldBookThemeCommand.php';

WP_CLI::add_command( 'scaffold book-theme', array( 'Pressbooks_CLI\ScaffoldBookThemeCommand', 'scaffold_book_theme' ) );
WP_CLI::add_command( 'pb issue-template', array( 'Pressbooks_CLI\IssueTemplateCommand', 'scaffold_issue_template' ) );
