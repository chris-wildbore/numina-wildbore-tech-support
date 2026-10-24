# Provenance-Aware Retrieval on Repurposed Linux Hardware

**Status:** Working local subsystem with bounded acceptance tests, October 2026. Not a hosted commercial service or an autonomous general-purpose agent.

## Problem
Preserve and retrieve large bodies of reference material on modest existing computers, without requiring all source text to fit into a model's context window or treating an unreviewed conversation extract as authoritative.

## Engineering approach
- Keep canonical source files separate from derived full-text indexes and conversational working notes.
- Use Python and SQLite FTS5 for low-memory local document search, with traceable file paths and checksums.
- Build small, task-specific context packets instead of blindly transmitting entire archives.
- Enforce a source hierarchy, mark restricted documents, and keep provisional session notes outside the canonical corpus.
- Expose the search and context functions as narrow local Model Context Protocol (MCP) tools for a separately selected model provider.

## Observed evidence (dates matter)
- A read-only Obsidian/Markdown retrieval index contained **37,913 searchable records** in an October 24, 2026 read-only SQLite count; this indexed subset must not be confused with the full archive.
- A separate local preserved-document source index contained **306 extractable records** at the October 22 acceptance checkpoint.
- Four curated reference snapshots were integrity-checked as sources for bounded context assembly.
- Three new MCP tools for contextual retrieval, preserved-document search and provisional session journaling passed source-backed smoke tests alongside five pre-existing tools on October 22.
- The local web interface returned HTTP 200 on its main route in a separate October 24 check.

## Boundaries
The October 22 acceptance explicitly did **not** establish an attached live conversational model or a completed full-system recovery image. Separate later hosted-gateway tests demonstrated narrow text and function-call compatibility, not a reliable production conversation loop. Full disaster recovery, automatic memory selection, external-provider privacy gates and restore drills are independent unfinished milestones.

**Transferable result:** searchable, attributed local context on resource-constrained Linux machines, with replaceable model access and explicit acceptance boundaries. This case intentionally excludes private archive contents, device identifiers, personal relationship data, credentials and network topology.
