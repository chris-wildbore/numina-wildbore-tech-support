# Low-Resource Home-Lab Operations — Bounded Case Study

**Status:** Locally demonstrated; October 21, 2026 operational diagnosis. No formal benchmark or production hosting claim.

## Challenge

Run everyday services on repurposed, low-cost Linux computers while distinguishing verified results from tasks still underway.

## Working patterns

- Maintain independent local services for optical media ingestion, a household media library and private web staging; don't conflate a staging site with a published website.
- Observe each stage separately: disc recognition, successful rip, copy to final media storage, library scan and independent playback.
- Preserve sources during interrupted handoffs; do not restart or wipe a busy filesystem just because a progress indicator looks slow.
- Recover laptop access through an existing trusted SSH hop without changing production services.

## October 21 evidence

One full video file was independently observed in final media-library storage after a completed rip and successful library refresh request. A second DVD was automatically recognized and successfully ripped after remotely closing the optical drive, but its final copy was still underway at the checkpoint.

A separate disk-latency investigation found an external storage device on a 480 Mb/s USB 2.0 controller, a host with heavy swap usage and elevated I/O pressure during copy activity. These findings identify practical performance limits; they **do not** by themselves prove defective media or a single complete root cause.

## Limits

No private IP addresses, credentials, original media, account details, personal messages or unreleased client work appear here. Deployment, actual end-user playback of the new file, and sustained throughput are separately testable stages.
