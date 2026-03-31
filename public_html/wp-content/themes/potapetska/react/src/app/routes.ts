import { createBrowserRouter } from "react-router";
import { HomePage } from "./HomePage";
import { ServicePage } from "./pages/ServicePage";
import { ContactPage } from "./pages/ContactPage";
import { ProjectKarlovMostPage } from "./pages/ProjectKarlovMostPage";
import { AboutPage } from "./pages/AboutPage";

export const router = createBrowserRouter([
  {
    path: "/",
    Component: HomePage,
  },
  {
    path: "/sluzby/stavebni-potapecske-prace",
    Component: ServicePage,
  },
  {
    path: "/kontakt",
    Component: ContactPage,
  },
  {
    path: "/projekt/sanace-piliru-karlova-mostu",
    Component: ProjectKarlovMostPage,
  },
  {
    path: "/o-nas",
    Component: AboutPage,
  },
]);