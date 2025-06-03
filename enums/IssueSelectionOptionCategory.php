<?php

/**
 * @file plugins/importexport/quickSubmit/enums/IssueSelectionOptionCategory.php
 *
 * Copyright (c) 2013-2025 Simon Fraser University
 * Copyright (c) 2003-2025 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @class IssueSelectionOptionCategory
 *
 * @brief Issue selection option category
 */

namespace APP\plugins\importexport\quickSubmit\enums;

enum IssueSelectionOptionCategory: int
{
    case NO_ISSUE = 0;
    case FUTURE_ISSUES = -1;
    case CURRENT_ISSUE = -2;
    case BACK_ISSUES = -3;

    /*
     * Get the label for the issue selection option
     */
    public function getLabel(): string
    {
        return match ($this) {
            static::NO_ISSUE => '',
            static::FUTURE_ISSUES => '------    ' . __('editor.issues.futureIssues') . '    ------',
            static::CURRENT_ISSUE => '------    ' . __('editor.issues.currentIssue') . '    ------',
            static::BACK_ISSUES => '------    ' . __('editor.issues.backIssues') . '    ------',
        };
    }

    /*
     * Get the unselectable options
     */ 
    public static function unselectableOptions(): array
    {
        return [
            static::FUTURE_ISSUES,
            static::CURRENT_ISSUE,
            static::BACK_ISSUES,
        ];
    }
}
