# Evidence-Gated Opportunity Reporting — Local Prototype

**Status:** Locally implemented and acceptance-tested in October 2026; source changes pending engineering review. Not publicly deployed and no customer conversions or revenue are claimed.

## Problem
A small multi-brand operation needed a way to see genuine marketing opportunities and calculate funds available for future improvements without treating unverified prospects or estimates as paid sales.

## Implementation pattern
- Generate a local dashboard from existing offers, calls to action and dated source evidence.
- Isolate individual business records; record inquiries and sales as distinct, manually verified events.
- Require a review/approval state for anything that would be published or counted as income.
- Calculate net revenue in CAD from verified-only entries, separating earnings, costs, forecasts and earmarked upgrade funds.
- Test migrations, report generation and validation against disposable fixtures rather than fabricating real transactions.

## Observed result
An October 21 bounded engineering handoff recorded a functioning three-brand local opportunity report, inquiry/sale schemas, upgrade-fund calculations and passing local acceptance tests. The corresponding project checkout still had uncommitted application/documentation changes at an October 24 review, so the build is correctly described here as a prototype, not a released product.

## Limits
No customer contact, campaign launch, paid inference, real sale, bank deposit or production deployment was established by those tests. Real business records and private implementation topology are excluded.

**Transferable result:** evidence-first reporting design, where a dashboard is useful before it has any right to claim business success.
