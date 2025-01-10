import { onReady } from "@tec/tickets/seating/utils";
import { doNotInterruptLeavingToModifyAttendees } from "./modify-attendees";

onReady(() => doNotInterruptLeavingToModifyAttendees());
