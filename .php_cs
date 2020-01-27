<?php
declare(strict_types = 1);

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests/phpbrowscapTest')
    ->append(array(__FILE__));

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(
        array(
            '@PSR2' => true,
            '@PhpCsFixer' => true,
            '@PhpCsFixer:risky' => true,
            '@Symfony' => true,
            '@Symfony:risky' => true,
            '@PHP70Migration' => true,
            '@PHP71Migration' => true,

            // @PSR2 rules configured different from default
            'blank_line_after_namespace' => true,
            'class_definition' => array(
                'single_line' => false,
                'single_item_single_line' => true,
                'multi_line_extends_each_single_line' => true,
            ),
            'method_argument_space' => array(
                'on_multiline' => 'ensure_fully_multiline',
                'keep_multiple_spaces_after_comma' => false,
            ),
            'no_break_comment' => false,
            'visibility_required' => false,

            // @PhpCsFixer rules configured different from default
            'align_multiline_comment' => array('comment_type' => 'all_multiline'),
            'array_syntax' => array('syntax' => 'long'),
            'binary_operator_spaces' => array('default' => 'single_space'),
            'concat_space' => array('spacing' => 'one'),
            'declare_equal_normalize' => array('space' => 'single'),
            'php_unit_internal_class' => false,
            'no_superfluous_phpdoc_tags' => false,
            'multiline_whitespace_before_semicolons' => array(
                'strategy' => 'no_multi_line',
            ),
            'no_extra_blank_lines' => array(
                'tokens' => array('break', 'case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'return', 'square_brace_block', 'switch', 'throw', 'use', 'useTrait', 'use_trait'),
            ),
            'no_useless_return' => false,
            'php_unit_test_class_requires_covers' => false,
            'phpdoc_add_missing_param_annotation' => array('only_untyped' => false),
            'phpdoc_no_empty_return' => false,
            'phpdoc_summary' => false,
            'single_blank_line_before_namespace' => false,
            'single_line_comment_style' => array('comment_types' => array('hash')),
            'blank_line_after_opening_tag' => false,
            'return_type_declaration' => array('space_before' => 'one'),
            'unary_operator_spaces' => false,
            'phpdoc_annotation_without_dot' => false,
            'phpdoc_align' => false,

            // @PhpCsFixer:risky rules configured different from default
            'php_unit_strict' => array('assertions' => array('assertAttributeEquals', 'assertAttributeNotEquals', 'assertNotEquals')),
            'no_alias_functions' => array('sets' => array('@internal', '@IMAP', '@mbreg', '@all')),
            'php_unit_test_case_static_method_calls' => array('call_type' => 'self'),
            'strict_param' => false,
            'comment_to_phpdoc' => false,

            // @Symfony rules configured different from default
            'no_blank_lines_after_phpdoc' => false,
            'space_after_semicolon' => array('remove_in_empty_for_expressions' => true),
            'yoda_style' => array(
                'equal' => true,
                'identical' => true,
                'less_and_greater' => true,
            ),
            'single_line_throw' => false,

            // @Symfony:risky rules configured different from default
            'non_printable_character' => array('use_escape_sequences_in_strings' => true),

            // @PHP70Migration rules configured different from default
            'ternary_to_null_coalescing' => false,

            // @PHP70Migration:risky rules configured different from default
            'pow_to_exponentiation' => false,

            // @PHPUnit60Migration:risky rules configured different from default
            'php_unit_dedicate_assert' => array('target' => 'newest'),

            // other rules
            'backtick_to_shell_exec' => true,
            'class_keyword_remove' => false,
            'final_class' => false,
            'final_internal_class' => array(
                'annotation-black-list' => array('@final', '@Entity', '@ORM'),
                'annotation-white-list' => array('@internal'),
            ),
            'final_public_method_for_abstract_class' => true,
            'final_static_access' => true,
            'general_phpdoc_annotation_remove' => array(
                'expectedExceptionMessageRegExp',
                'expectedException',
                'expectedExceptionMessage',
                'author',
            ),
            'global_namespace_import' => false,
            'header_comment' => false,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => array('syntax' => 'long'),
            'mb_str_functions' => false,
            'native_constant_invocation' => false,
            'native_function_invocation' => false,
            'no_blank_lines_before_namespace' => false,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => false,
            'nullable_type_declaration_for_default_null_value' => array('use_nullable_type_declaration' => true),
            'ordered_class_elements' => false,
            'ordered_imports' => array('sort_algorithm' => 'alpha'),
            'ordered_interfaces' => array('direction' => 'ascend', 'order' => 'alpha'),
            'php_unit_size_class' => false,
            'php_unit_test_annotation' => array('case' => 'camel', 'style' => 'prefix'),
            'phpdoc_to_param_type' => false,
            'phpdoc_to_return_type' => false,
            'phpdoc_types_order' => array(
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'alpha',
            ),
            'psr0' => true,
            'self_static_accessor' => true,
            'simplified_null_return' => false,
            'static_lambda' => true,
        )
    )
    ->setUsingCache(true)
    ->setFinder($finder);
