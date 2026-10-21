# Local Media Workflow — Automated DVD Ingestion

Status: **Working locally** (October 2026).

**Problem:** Repetitive optical-disc archival needed a reliable sequence from disc insertion to browsable media and status notification.

**Delivered:** Local extraction workflow, error handling for selected disc anomalies, storage handoff, media-library refresh, and two distinct notifications (disc tray open, media ready).

**Observed acceptance:** Multiple full disc-to-library runs completed; user confirmed receiving the tray-open and ready notifications and independently streamed a Jellyfin playlist away from home.

**Limitations:** Local household tooling, not a commercial product or a blanket guarantee for every disc. Do not publish credentials, media copies, or private network identifiers.

**Pattern demonstrated:** Safe staged automation, observable state transitions, graceful handling of exceptions.

## October 21, 2026 — new observational checkpoint

The optical pipeline completed two distinct rip jobs on October 21. The first film's complete file was verified in the final media library, and a Jellyfin refresh was successfully requested. The second disc was recognized and ripped successfully, but its storage transfer was still underway at the latest checked point. This is **not** a claim that both films had passed playback acceptance.

During a long transfer, the media host showed heavy I/O wait and near-full swap; the external SSD was attached to a USB 2.0 controller. No files were deleted, no filesystem repair was attempted, and those observations are not proof of drive failure.

A related [operations case study](resource-constrained-homelab.md) describes the transferable engineering pattern without private infrastructure details.
