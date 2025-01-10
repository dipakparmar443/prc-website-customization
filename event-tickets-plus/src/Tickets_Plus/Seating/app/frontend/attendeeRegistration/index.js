import { onReady } from "@tec/tickets/seating/utils";
import { doNotInterruptLeavingARPage } from "./ar-page";
// We are registering JS filters in the ./filters file so we want it to be included in the build.
import * as filters from './filters'

onReady(() => doNotInterruptLeavingARPage());
