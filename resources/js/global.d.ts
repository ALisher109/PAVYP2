import {ComponentStore} from "./services/components";
import {EventManager} from "./services/events";
import {HttpManager} from "./services/http";
import {Translator} from "./services/translations";

declare global {
    const __DEV__: boolean;

    interface Window {
        $components: ComponentStore;
        $events: EventManager;
        $trans: Translator;
        $http: HttpManager;
        baseUrl: (path: string) => string;
    }
}