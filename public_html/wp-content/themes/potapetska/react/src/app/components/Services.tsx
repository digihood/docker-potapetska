import { useState } from "react";

const services = [
  {
    id: 1,
    title: "Stavební potápěčské práce",
    desc: "Sanace betonu, injektáže, těsnění trhlin, stavby pod vodou, opravy hydrotechnických konstrukcí a mostních pilířů.",
    tags: ["Sanace betonu", "Injektáže", "Hydroizolace"],
    btnLabel: "Více o stavebních potápěčských pracích",
  },
  {
    id: 2,
    title: "Strojní potápěčské práce",
    desc: "Montáže a demontáže technologií, výměny míchadel a čerpadel, opravy hrazení stavidel a šoupátek v ponořeném stavu.",
    tags: ["Montáže", "Míchadla", "Hrazení"],
    btnLabel: "Více o strojních potápěčských pracích",
  },
  {
    id: 3,
    title: "Záchranářské potápěčské práce",
    desc: "Vyprošťování plavidel a vozidel, vyhledávání osob a předmětů, zásahy při živelných pohromách a haváriích.",
    tags: ["Vyprošťování", "Záchrana osob", "Havárie"],
    btnLabel: "Více o záchranářských potápěčských pracích",
  },
  {
    id: 4,
    title: "Podzemní potápěčské práce",
    desc: "Práce v šachtách, tunelech, trasách metra a kanalizačních systémech bez volné hladiny. Sifony a průplavy.",
    tags: ["Šachty", "Tunely", "Metro"],
    btnLabel: "Více o podzemních potápěčských pracích",
  },
  {
    id: 5,
    title: "Poradenství pro potápěčské práce",
    desc: "Technologické postupy a odborné konzultace pro projektanty, stavební firmy a provozovatele vodních staveb.",
    tags: ["Projektanti", "Technologie", "Konzultace"],
    btnLabel: "Více o poradenství pro potápěčské práce",
  },
  {
    id: 6,
    title: "Speciální potápěčské práce",
    desc: "Podvodní svařování a řezání, pálení ocelových konstrukcí, trhací práce a demolice pod hladinou.",
    tags: ["Svařování", "Řezání", "Demolice"],
    btnLabel: "Více o speciálních potápěčských pracích",
  },
  {
    id: 7,
    title: "Práce v průmyslových nádržích",
    desc: "Čištění fermentorů bioplynových stanic, revize nádrží SHZ, jímek a průmyslových zásobníků kapalin.",
    tags: ["Fermentory BPS", "Nádrže SHZ", "Jímky"],
    btnLabel: "Více o pracích v průmyslových nádržích",
  },
  {
    id: 8,
    title: "Video & Fotodokumentace",
    desc: "Průmyslová revize stavebního stavu vodních děl. ROV průzkum, podvodní kamera, technické zprávy pro správce.",
    tags: ["ROV průzkum", "Videozáznam", "Technické zprávy"],
    btnLabel: "Více o video a fotodokumentaci",
  },
  {
    id: 9,
    title: "Výuka pracovních potápěčů",
    desc: "Rekvalifikační kurzy – kód 69-014-H. Profesionální trénink pracovního potápění dle platné legislativy.",
    tags: ["Kód 69-014-H", "Rekvalifikace", "Výcvik"],
    btnLabel: "Více o výuce pracovních potápěčů",
  },
  {
    id: 10,
    title: "Soudní znalec",
    desc: "Znalecké posudky v technických oborech, bezpečnost práce při potápění, soudní znalectví pro státní správu a průmysl.",
    tags: ["Znalecké posudky", "Bezpečnost práce", "Státní správa"],
    btnLabel: "Více o soudním znalectví",
    highlight: true,
  },
  {
    id: 11,
    title: "Autorizovaná osoba pro prac. potápění",
    desc: "Zkoušky profesní kvalifikace v gesci Ministerstva zemědělství ČR. Autorizace dle NSK.",
    tags: ["MZe ČR", "NSK", "Zkoušky PK"],
    btnLabel: "Více o autorizovaných zkouškách",
    highlight: true,
  },
];

export function Services() {
  const [hovered, setHovered] = useState<number | null>(null);

  return (
    <section
      id="sluzby"
      style={{
        background: "#f8f9fb",
        padding: "100px 0",
        fontFamily: "'Barlow', sans-serif",
        borderTop: "none",
      }}
    >
      <div className="max-w-screen-xl mx-auto px-6">
        {/* Section header */}
        <div style={{ marginBottom: "64px" }}>
          <div
            style={{
              display: "inline-flex",
              alignItems: "center",
              gap: "10px",
              marginBottom: "16px",
            }}
          >
            <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
            <span
              style={{
                color: "#033869",
                fontSize: "0.78rem",
                fontWeight: 700,
                letterSpacing: "0.16em",
                textTransform: "uppercase",
              }}
            >
              Kompletní portfolio
            </span>
          </div>
          <h2
            style={{
              fontFamily: "'Barlow Condensed', sans-serif",
              fontSize: "clamp(2rem, 3.5vw, 3rem)",
              fontWeight: 800,
              color: "#033869",
              textTransform: "uppercase",
              lineHeight: 1.1,
              marginBottom: "16px",
            }}
          >
            Profesionální podvodní práce –
            <br />
            <span style={{ color: "#42454e" }}>11 specializací pod jednou střechou</span>
          </h2>
          
          <p style={{ color: "#6b7280", fontSize: "1.05rem", maxWidth: "600px", lineHeight: 1.7 }}>
            Od stavebních rekonstrukcí přes soudní znalectví až po výuku. Kompletní servis
            pro průmysl, státní správu i soukromý sektor.
          </p>
        </div>

        {/* Grid */}
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "repeat(auto-fill, minmax(320px, 1fr))",
            gap: "20px",
          }}
        >
          {services.map((service) => {
            const isHovered = hovered === service.id;
            const isDark = service.highlight || isHovered;
            return (
              <div
                key={service.id}
                onMouseEnter={() => setHovered(service.id)}
                onMouseLeave={() => setHovered(null)}
                style={{
                  background: service.highlight
                    ? isHovered ? "#033869" : "#022d5e"
                    : isHovered ? "#033869" : "#ffffff",
                  border: service.highlight
                    ? "2px solid #fcdb00"
                    : `2px solid ${isHovered ? "#033869" : "rgba(3,56,105,0.08)"}`,
                  borderRadius: "4px",
                  padding: "32px",
                  cursor: "default",
                  transition: "all 0.25s ease",
                  transform: isHovered ? "translateY(-4px)" : "none",
                  boxShadow: isHovered
                    ? "0 16px 48px rgba(3,56,105,0.18)"
                    : service.highlight
                    ? "0 4px 20px rgba(3,56,105,0.15)"
                    : "0 2px 8px rgba(0,0,0,0.04)",
                  position: "relative",
                  overflow: "hidden",
                  display: "flex",
                  flexDirection: "column",
                }}
              >
                {/* Title */}
                <h3
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "1.2rem",
                    fontWeight: 700,
                    color: isDark ? "#ffffff" : "#033869",
                    textTransform: "uppercase",
                    letterSpacing: "0.04em",
                    marginBottom: "10px",
                    lineHeight: 1.2,
                    transition: "color 0.25s",
                    paddingRight: "40px",
                  }}
                >
                  {service.title}
                </h3>

                {/* Tags */}
                <div style={{ display: "flex", flexWrap: "wrap", gap: "5px", marginBottom: "14px" }}>
                  {service.tags.map((tag) => (
                    <span
                      key={tag}
                      style={{
                        fontSize: "0.62rem",
                        fontWeight: 600,
                        letterSpacing: "0.05em",
                        textTransform: "uppercase",
                        padding: "3px 8px",
                        borderRadius: "2px",
                        background: isDark
                          ? "rgba(252,219,0,0.15)"
                          : "rgba(3,56,105,0.06)",
                        color: isDark ? "#fcdb00" : "#033869",
                        transition: "all 0.25s",
                      }}
                    >
                      {tag}
                    </span>
                  ))}
                </div>

                {/* Description */}
                <p
                  style={{
                    color: isDark ? "rgba(226,232,240,0.85)" : "#6b7280",
                    fontSize: "0.9rem",
                    lineHeight: 1.65,
                    marginBottom: "20px",
                    transition: "color 0.25s",
                    flex: 1,
                  }}
                >
                  {service.desc}
                </p>

                {/* CTA button */}
                <a
                  href="#kontakt"
                  onClick={(e) => {
                    e.preventDefault();
                    document.querySelector("#kontakt")?.scrollIntoView({ behavior: "smooth" });
                  }}
                  style={{
                    display: "inline-flex",
                    alignItems: "center",
                    gap: "8px",
                    background: isDark ? "#fcdb00" : "#033869",
                    color: isDark ? "#033869" : "#ffffff",
                    border: "none",
                    borderRadius: "3px",
                    padding: "10px 16px",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.04em",
                    textDecoration: "none",
                    transition: "all 0.2s",
                    cursor: "pointer",
                    alignSelf: "flex-start",
                  }}
                  onMouseEnter={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.background = isDark ? "#e5c500" : "#022d5e";
                    el.style.boxShadow = "0 4px 16px rgba(3,56,105,0.25)";
                  }}
                  onMouseLeave={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.background = isDark ? "#fcdb00" : "#033869";
                    el.style.boxShadow = "none";
                  }}
                >
                  {service.btnLabel}
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>

                {/* Bottom accent line */}
                <div
                  style={{
                    position: "absolute",
                    bottom: 0,
                    left: 0,
                    right: 0,
                    height: "3px",
                    background: "#fcdb00",
                    transform: isHovered || service.highlight ? "scaleX(1)" : "scaleX(0)",
                    transformOrigin: "left",
                    transition: "transform 0.3s ease",
                  }}
                />
              </div>
            );
          })}
        </div>

        {/* CTA row */}
        <div
          style={{
            marginTop: "52px",
            display: "flex",
            justifyContent: "center",
            gap: "20px",
            flexWrap: "wrap",
          }}
        >
          <a
            href="#kontakt"
            onClick={(e) => {
              e.preventDefault();
              document.querySelector("#kontakt")?.scrollIntoView({ behavior: "smooth" });
            }}
            style={{
              background: "#fcdb00",
              color: "#033869",
              fontFamily: "'Barlow', sans-serif",
              fontSize: "0.88rem",
              fontWeight: 700,
              letterSpacing: "0.1em",
              textTransform: "uppercase",
              textDecoration: "none",
              padding: "14px 36px",
              borderRadius: "3px",
              display: "inline-flex",
              alignItems: "center",
              gap: "10px",
              boxShadow: "0 4px 20px rgba(252,219,0,0.35)",
              transition: "all 0.2s",
            }}
            onMouseEnter={(e) => {
              (e.currentTarget as HTMLElement).style.background = "#e5c500";
              (e.currentTarget as HTMLElement).style.boxShadow = "0 8px 28px rgba(252,219,0,0.5)";
            }}
            onMouseLeave={(e) => {
              (e.currentTarget as HTMLElement).style.background = "#fcdb00";
              (e.currentTarget as HTMLElement).style.boxShadow = "0 4px 20px rgba(252,219,0,0.35)";
            }}
          >
            Poptat konkrétní službu
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </section>
  );
}