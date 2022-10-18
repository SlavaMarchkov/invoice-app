import { createRouter, createWebHistory } from "vue-router";

import InvoiceIndex from "@/components/Invoice/Index.vue";
import NotFound from "@/NotFound.vue";

const routes = [
    {
        path: "/",
        component: InvoiceIndex,
        name: "invoice.index",
    },
    {
        path: "/:pathMatch(.*)*",
        component: NotFound,
        name: "not-found",
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
