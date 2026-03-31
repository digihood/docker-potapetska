import { Header } from "./components/Header";
import { Hero } from "./components/Hero";
import { Services } from "./components/Services";
import { Equipment } from "./components/Equipment";
import { About } from "./components/About";
import { References } from "./components/References";
import { Contact } from "./components/Contact";
import { Footer } from "./components/Footer";

export function HomePage() {
  return (
    <div
      style={{
        fontFamily: "'Barlow', sans-serif",
        overflowX: "hidden",
        minWidth: "320px",
      }}
    >
      <Header />
      <main>
        <Hero />
        <Services />
        <Equipment />
        <About />
        <References />
        <Contact />
      </main>
      <Footer />
    </div>
  );
}
