#!/usr/bin/env bash
set -euo pipefail
cd "$(dirname "$0")"
ROOT="$(pwd)"
SESSION="pokefony"

if ! tmux has-session -t "$SESSION" 2>/dev/null; then
  tmux new-session -d -s "$SESSION" -c "$ROOT"
  tmux new-window -t "$SESSION:2" -c "$ROOT"

  tmux new-window -t "$SESSION:3" -n client -c "$ROOT/client"
  tmux send-keys -t "$SESSION:client" "npm run dev" C-m

  tmux new-window -t "$SESSION:4" -n api -c "$ROOT/api"
  tmux send-keys -t "$SESSION:api" "symfony serve" C-m

  tmux select-window -t "$SESSION:1"

  open -a "Google Chrome" "http://localhost:5173"
fi

if [ -n "${TMUX:-}" ]; then
  tmux switch-client -t "$SESSION"
else
  tmux attach-session -t "$SESSION"
fi
