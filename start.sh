#!/usr/bin/env bash
set -euo pipefail
cd "$(dirname "$0")"
ROOT="$(pwd)"

osascript <<EOF
tell application "iTerm2"
  tell current window
    create tab with default profile
    tell current session
      write text "cd '$ROOT/api' && printf '\\\\033]0;api\\\\007' && symfony serve"
    end tell
    create tab with default profile
    tell current session
      write text "cd '$ROOT/client' && printf '\\\\033]0;vite\\\\007' && npm run dev"
    end tell
  end tell
end tell
EOF

open -a "Google Chrome" "http://localhost:5173"
