<?php

class View
{
    public static function render($template, $data = [])
    {
        // Convert the template name into a file path
        $filePath = str_replace('.', '/', $template) . '.oracus.php';

        // Get the full path to the view file
        $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/view/' . $filePath;
        $notFoundPath = $_SERVER['DOCUMENT_ROOT'] . '/view/404.oracus.php';

        // Ensure the template file exists
        if (!file_exists($fullPath) && !file_exists($notFoundPath)) {
            echo "View file not found: " . $fullPath;
            return;
        }elseif (!file_exists($fullPath) && file_exists($notFoundPath)) {
            include $notFoundPath;
            return;
        }

        // Extract variables passed to the view
        extract($data);

        // Read the file content
        $content = file_get_contents($fullPath);

        // Parsing Blade-like syntax into PHP
        $content = self::parseBladeSyntax($content);

        // Execute the final PHP
        eval(' ?>' . $content . '<?php ');
    }

    private static function parseBladeSyntax($content)
    {
        // Handle {{ }} for echoing variables
        $content = preg_replace('/\{\{\s*(.+?)\s*\}\}/', '<?= htmlspecialchars($1) ?>', $content);

        // Handle @php ... @endphp for raw PHP blocks
        $content = preg_replace('/@php\s*(.*?)\s*@endphp/s', '<?php $1 ?>', $content);

        // Handle @if, @elseif, @else, @endif
        $content = preg_replace('/@if\s*\((.*?)\)/', '<?php if ($1): ?>', $content);
        $content = preg_replace('/@elseif\s*\((.*?)\)/', '<?php elseif ($1): ?>', $content);
        $content = preg_replace('/@else/', '<?php else: ?>', $content);
        $content = preg_replace('/@endif/', '<?php endif; ?>', $content);

        // Handle @foreach, @endforeach
        $content = preg_replace('/@foreach\s*\((.*?)\)/', '<?php foreach ($1): ?>', $content);
        $content = preg_replace('/@endforeach/', '<?php endforeach; ?>', $content);

        // Handle @for, @endfor
        $content = preg_replace('/@for\s*\((.*?)\)/', '<?php for ($1): ?>', $content);
        $content = preg_replace('/@endfor/', '<?php endfor; ?>', $content);

        // Handle @while, @endwhile
        $content = preg_replace('/@while\s*\((.*?)\)/', '<?php while ($1): ?>', $content);
        $content = preg_replace('/@endwhile/', '<?php endwhile; ?>', $content);

        // Add more custom Blade-like directives here as needed

        return $content;
    }
}
