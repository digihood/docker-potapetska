import underwaterImg from "figma:asset/efa41ca1cb8b29dc9698d00aa1af6e8316b9da6d.png";

const rentalItems = [
  { name: "Přilba Kirby Morgan KMB-18", unit: "den", price: "Na dotaz" },
  { name: "Záchranný ponton 8×4 m", unit: "den", price: "Na dotaz" },
  { name: "Podmořský ROV", unit: "den", price: "Na dotaz" },
  { name: "VT čerpací agregát 800 bar", unit: "den", price: "Na dotaz" },
  { name: "Hydraulická vrtná souprava", unit: "den", price: "Na dotaz" },
  { name: "Kompletní potápěčská stanice", unit: "den", price: "Na dotaz" },
];

const saleItems = [
  { name: "Bagr Caterpillar 320D", unit: "ks", price: "Na dotaz" },
  { name: "Nakladač JCB 3CX", unit: "ks", price: "Na dotaz" },
  { name: "Vysokozdvižný vozík Toyota 3t", unit: "ks", price: "Na dotaz" },
  { name: "Kompresor Atlas Copco XAS 185", unit: "ks", price: "Na dotaz" },
  { name: "Odvodňovací čerpadlo Gorman-Rupp", unit: "ks", price: "Na dotaz" },
  { name: "Stavební kontejner 20ft", unit: "ks", price: "Na dotaz" },
];

export function Equipment() {
  return (
    <section
      id="technika"
      style={{
        fontFamily: "'Barlow', sans-serif",
        background: "#033869",
        padding: "100px 0 0",
        overflow: "hidden",
      }}
    >
      <div className="max-w-screen-xl mx-auto px-6">
        {/* Section header */}
        <div style={{ marginBottom: "64px" }}>
          <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "16px" }}>
            <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
            <span
              style={{
                color: "#fcdb00",
                fontSize: "0.78rem",
                fontWeight: 700,
                letterSpacing: "0.16em",
                textTransform: "uppercase",
              }}
            >
              Technické zázemí & Půjčovna
            </span>
          </div>
          <h2
            style={{
              fontFamily: "'Barlow Condensed', sans-serif",
              fontSize: "clamp(2rem, 3.5vw, 3rem)",
              fontWeight: 800,
              color: "#ffffff",
              textTransform: "uppercase",
              lineHeight: 1.1,
              marginBottom: "16px",
            }}
          >
            Nejširší fond profesionální
            <br />
            <span style={{ color: "#fcdb00" }}>techniky v České republice</span>
          </h2>
          <p style={{ color: "rgba(226,232,240,0.75)", fontSize: "1.05rem", maxWidth: "600px", lineHeight: 1.7 }}>
            Vlastníme vše, co konkurence musí najímat. Nezávislost na subdodávkách znamená
            absolutní kontrolu nad termínem a bezpečností každé operace.
          </p>
        </div>

        {/* Key benefit strip */}
        <div
          style={{
            background: "#fcdb00",
            borderRadius: "4px",
            padding: "20px 32px",
            marginBottom: "52px",
            display: "flex",
            alignItems: "center",
            gap: "16px",
            flexWrap: "wrap",
          }}
        >
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#033869" strokeWidth="2.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <polyline points="9 12 11 14 15 10" />
          </svg>
          <p
            style={{
              color: "#033869",
              fontWeight: 700,
              fontSize: "1rem",
              letterSpacing: "0.02em",
              margin: 0,
            }}
          >
            „Nezávislost na subdodávkách = absolutní kontrola nad termínem a bezpečností."
          </p>
        </div>

        {/* Rental section */}
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "1fr 1fr",
            gap: "0",
            background: "#022d5e",
            borderRadius: "4px",
            overflow: "hidden",
          }}
          className="lg:grid-cols-2 grid-cols-1"
        >
          {/* Left: rental list */}
          <div style={{ padding: "52px" }}>
            <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "12px" }}>
              <div style={{ width: "28px", height: "3px", background: "#fcdb00" }} />
              <span
                style={{
                  color: "#fcdb00",
                  fontSize: "0.72rem",
                  fontWeight: 700,
                  letterSpacing: "0.16em",
                  textTransform: "uppercase",
                }}
              >
                Půjčovna techniky
              </span>
            </div>
            <h3
              style={{
                fontFamily: "'Barlow Condensed', sans-serif",
                fontSize: "1.8rem",
                fontWeight: 800,
                color: "#ffffff",
                textTransform: "uppercase",
                letterSpacing: "0.02em",
                marginBottom: "16px",
              }}
            >
              Pronájem odborné
              <br />
              techniky partnerům
            </h3>
            <p style={{ color: "rgba(226,232,240,0.6)", fontSize: "0.9rem", lineHeight: 1.7, marginBottom: "28px" }}>
              Přilby Kirby Morgan, záchranné pontony, podmořské ROV, VT agregáty, hydraulické vrtné soupravy a kompletní potápěčské stanice — vše k dispozici na den.
            </p>

            {/* Rental items list */}
            <p
              style={{
                color: "#ffffff",
                fontSize: "0.8rem",
                fontWeight: 700,
                letterSpacing: "0.12em",
                textTransform: "uppercase",
                marginBottom: "12px",
              }}
            >
              K pronájmu nabízíme
            </p>
            <ul style={{ listStyle: "none", padding: 0, margin: "0 0 32px" }}>
              {rentalItems.map((item, i) => (
                <li
                  key={i}
                  style={{
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "space-between",
                    padding: "10px 0",
                    borderBottom: "1px solid rgba(255,255,255,0.08)",
                    color: "rgba(226,232,240,0.85)",
                    fontSize: "0.9rem",
                  }}
                >
                  <span style={{ display: "flex", alignItems: "center", gap: "10px" }}>
                    <span style={{ width: "6px", height: "6px", background: "#fcdb00", borderRadius: "50%", flexShrink: 0 }} />
                    {item.name}
                  </span>
                  <span style={{ color: "#fcdb00", fontWeight: 700, fontSize: "0.82rem", whiteSpace: "nowrap", marginLeft: "12px" }}>
                    {item.price}
                  </span>
                </li>
              ))}
            </ul>

            <a
              href="#kontakt"
              onClick={(e) => {
                e.preventDefault();
                document.querySelector("#kontakt")?.scrollIntoView({ behavior: "smooth" });
              }}
              style={{
                display: "inline-flex",
                alignItems: "center",
                gap: "10px",
                background: "#fcdb00",
                color: "#033869",
                fontFamily: "'Barlow', sans-serif",
                fontSize: "0.85rem",
                fontWeight: 700,
                letterSpacing: "0.1em",
                textTransform: "uppercase",
                textDecoration: "none",
                padding: "13px 28px",
                borderRadius: "3px",
                transition: "all 0.2s",
              }}
              onMouseEnter={(e) => { (e.currentTarget as HTMLElement).style.background = "#e5c500"; }}
              onMouseLeave={(e) => { (e.currentTarget as HTMLElement).style.background = "#fcdb00"; }}
            >
              Poptat půjčovnu
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>

          {/* Right: Sale section */}
          <div style={{ padding: "52px", background: "#033869" }}>
            <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "12px" }}>
              <div style={{ width: "28px", height: "3px", background: "#fcdb00" }} />
              <span
                style={{
                  color: "#fcdb00",
                  fontSize: "0.72rem",
                  fontWeight: 700,
                  letterSpacing: "0.16em",
                  textTransform: "uppercase",
                }}
              >
                Odprodej techniky
              </span>
            </div>
            <h3
              style={{
                fontFamily: "'Barlow Condensed', sans-serif",
                fontSize: "1.8rem",
                fontWeight: 800,
                color: "#ffffff",
                textTransform: "uppercase",
                letterSpacing: "0.02em",
                marginBottom: "16px",
              }}
            >
              Odprodej nepotřebné
              <br />
              techniky
            </h3>
            <p style={{ color: "rgba(226,232,240,0.6)", fontSize: "0.9rem", lineHeight: 1.7, marginBottom: "28px" }}>
              Bagry Caterpillar, nakladače JCB, vysokozdvižné vozíky, kompresory Atlas Copco, čerpadla a stavební kontejnery — vše připraveno k prodeji.
            </p>

            {/* Sale items list */}
            <p
              style={{
                color: "#ffffff",
                fontSize: "0.8rem",
                fontWeight: 700,
                letterSpacing: "0.12em",
                textTransform: "uppercase",
                marginBottom: "12px",
              }}
            >
              K prodeji nabízíme
            </p>
            <ul style={{ listStyle: "none", padding: 0, margin: "0 0 32px" }}>
              {saleItems.map((item, i) => (
                <li
                  key={i}
                  style={{
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "space-between",
                    padding: "10px 0",
                    borderBottom: "1px solid rgba(255,255,255,0.08)",
                    color: "rgba(226,232,240,0.85)",
                    fontSize: "0.9rem",
                  }}
                >
                  <span style={{ display: "flex", alignItems: "center", gap: "10px" }}>
                    <span style={{ width: "6px", height: "6px", background: "#fcdb00", borderRadius: "50%", flexShrink: 0 }} />
                    {item.name}
                  </span>
                  <span style={{ color: "#fcdb00", fontWeight: 700, fontSize: "0.82rem", whiteSpace: "nowrap", marginLeft: "12px" }}>
                    {item.price}
                  </span>
                </li>
              ))}
            </ul>

            <a
              href="#kontakt"
              onClick={(e) => {
                e.preventDefault();
                document.querySelector("#kontakt")?.scrollIntoView({ behavior: "smooth" });
              }}
              style={{
                display: "inline-flex",
                alignItems: "center",
                gap: "10px",
                background: "#fcdb00",
                color: "#033869",
                fontFamily: "'Barlow', sans-serif",
                fontSize: "0.85rem",
                fontWeight: 700,
                letterSpacing: "0.1em",
                textTransform: "uppercase",
                textDecoration: "none",
                padding: "13px 28px",
                borderRadius: "3px",
                transition: "all 0.2s",
              }}
              onMouseEnter={(e) => { (e.currentTarget as HTMLElement).style.background = "#e5c500"; }}
              onMouseLeave={(e) => { (e.currentTarget as HTMLElement).style.background = "#fcdb00"; }}
            >
              Poptat odprodej
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>

        {/* Bottom wave decoration */}
        <div style={{ height: "80px" }} />
      </div>
    </section>
  );
}