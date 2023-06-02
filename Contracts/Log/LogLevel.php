<?php declare(strict_types=1);

namespace App\Core\Log;

/**
 * Framework specific version of PSR-3: Logger Interface's LogLevel 
 */
enum LogLevel: string
{
    case EMERGENCY = 'emergency';
    case ALERT = 'alert';
    case CRITICAL = 'critical';
    case ERROR = 'error';
    case WARNING = 'warning';
    case NOTICE = 'notice';
    case INFO = 'info';
    case DEBUG = 'debug';
}