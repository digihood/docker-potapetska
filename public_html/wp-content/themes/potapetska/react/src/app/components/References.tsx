const EXCAVATOR_IMG = "https://images.unsplash.com/photo-1749899518796-0e57ff2244f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxleGNhdmF0b3IlMjBjb25zdHJ1Y3Rpb24lMjBzaXRlJTIwd2F0ZXJ8ZW58MXx8fHwxNzcyMTE1MTU2fDA&ixlib=rb-4.1.0&q=80&w=600";

const projects = [
  {
    title: "Sanace pilířů Karlova mostu",
    category: "Stavební práce",
    location: "Praha",
    date: "2018–2021",
    desc: "Komplexní podvodní sanace historických mostních pilířů – injektáže, torkret beton, hydroizolace.",
  },
  {
    title: "Revize VD Orlík",
    category: "Revize & Inspekce",
    location: "Jihočeský kraj",
    date: "Opakovaně",
    desc: "Pravidelné inspekce a opravy těsnění hráze vodního díla Orlík pro správce Povodí Vltavy.",
  },
  {
    title: "Prager Metrostav – tunelové sifony",
    category: "Podzemní práce",
    location: "Praha",
    date: "2015–2019",
    desc: "Práce v tunelech pražského metra bez volné hladiny, čerpání zaplavených úseků.",
  },
  {
    title: "Filmové produkce – podvodní sekvence",
    category: "Speciální práce",
    location: "ČR & zahraničí",
    date: "2010–2024",
    desc: "Technické zajištění podvodního natáčení pro české i mezinárodní filmové produkce.",
  },
  {
    title: "Opravy propustí a stavidel",
    category: "Strojní práce",
    location: "Středočeský kraj",
    date: "2019–2023",
    desc: "Výměny těsnění a šoupátek pod vodou bez nutnosti vypuštění vodních děl.",
  },
  {
    title: "ROV inspekce vodovodních sítí",
    category: "Video & Průzkum",
    location: "ČR",
    date: "2020–2024",
    desc: "Průzkum potrubí a betonových nádrží pomocí ROV technologie pro městské vodárny.",
  },
];

const clients = [
  "Povodí Vltavy, s.p.",
  "ČEZ, a.s.",
  "Metrostav a.s.",
  "Kloknerův ústav ČVUT",
  "Správa železnic",
  "Ředitelství silnic a dálnic",
  "Praha – hl. město",
  "Technická správa komunikací",
];

export function References() {
  return (
    <section
      id="reference"
      style={{
        fontFamily: "'Barlow', sans-serif",
        background: "#f0f2f5",
        padding: "100px 0",
        position: "relative",
      }}
    >
      <div className="max-w-screen-xl mx-auto px-6" style={{ position: "relative", zIndex: 2 }}>
        {/* Section header */}
        <div style={{ marginBottom: "64px" }}>
          <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "16px" }}>
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
              Reference & Klienti
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
            Prověřeno v extrémech –
            <br />
            <span style={{ color: "#42454e" }}>projekty, které jiní odmítli</span>
          </h2>
        </div>

        {/* Main content: Projects grid */}
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "1fr 1fr 1fr",
            gap: "20px",
            marginBottom: "32px",
          }}
          className="lg:grid-cols-[1fr_1fr_1fr] md:grid-cols-1"
        >
          {/* All 6 projects */}
          {projects.map((project, i) => (
            <a
              key={i}
              href="#kontakt"
              onClick={(e) => {
                e.preventDefault();
                document.querySelector("#kontakt")?.scrollIntoView({ behavior: "smooth" });
              }}
              style={{
                background: "#ffffff",
                border: "1px solid rgba(3,56,105,0.08)",
                borderRadius: "4px",
                overflow: "hidden",
                transition: "all 0.25s",
                cursor: "pointer",
                display: "block",
                textDecoration: "none",
                position: "relative",
              }}
              onMouseEnter={(e) => {
                const el = e.currentTarget as HTMLElement;
                el.style.boxShadow = "0 16px 40px rgba(3,56,105,0.12)";
                el.style.borderColor = "rgba(3,56,105,0.2)";
              }}
              onMouseLeave={(e) => {
                const el = e.currentTarget as HTMLElement;
                el.style.boxShadow = "none";
                el.style.borderColor = "rgba(3,56,105,0.08)";
              }}
            >
              {/* Small thumbnail image */}
              <div
                style={{
                  height: "140px",
                  overflow: "hidden",
                  position: "relative",
                }}
              >
                <img
                  src={EXCAVATOR_IMG}
                  alt={project.title}
                  style={{
                    width: "100%",
                    height: "100%",
                    objectFit: "cover",
                    objectPosition: "center",
                    display: "block",
                  }}
                />
                {/* Overlay */}
                <div
                  style={{
                    position: "absolute",
                    inset: 0,
                    background: "linear-gradient(to top, rgba(3,56,105,0.55) 0%, transparent 70%)",
                  }}
                />
                {/* Category tag over image */}
                <div
                  style={{
                    position: "absolute",
                    top: "12px",
                    left: "12px",
                    background: "#fcdb00",
                    color: "#033869",
                    fontSize: "0.65rem",
                    fontWeight: 800,
                    letterSpacing: "0.1em",
                    textTransform: "uppercase",
                    padding: "4px 10px",
                    borderRadius: "2px",
                  }}
                >
                  {project.category}
                </div>
              </div>

              {/* Card body */}
              <div style={{ padding: "22px 24px 20px" }}>
                {/* Title */}
                <h3
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "1.15rem",
                    fontWeight: 800,
                    color: "#033869",
                    textTransform: "uppercase",
                    letterSpacing: "0.02em",
                    marginBottom: "10px",
                    lineHeight: 1.2,
                  }}
                >
                  {project.title}
                </h3>

                {/* Location + date */}
                <div
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: "14px",
                    marginBottom: "12px",
                  }}
                >
                  <div
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: "4px",
                      color: "#9ca3af",
                      fontSize: "0.8rem",
                    }}
                  >
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    {project.location}
                  </div>
                  <div
                    style={{
                      display: "flex",
                      alignItems: "center",
                      gap: "4px",
                      color: "#9ca3af",
                      fontSize: "0.8rem",
                    }}
                  >
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                      <line x1="16" y1="2" x2="16" y2="6" />
                      <line x1="8" y1="2" x2="8" y2="6" />
                      <line x1="3" y1="10" x2="21" y2="10" />
                    </svg>
                    {project.date}
                  </div>
                </div>

                {/* Description */}
                <p style={{ color: "#6b7280", fontSize: "0.86rem", lineHeight: 1.6, marginBottom: "16px" }}>
                  {project.desc}
                </p>

                {/* Proklik */}
                <div
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: "6px",
                    color: "#033869",
                    fontSize: "0.75rem",
                    fontWeight: 700,
                    letterSpacing: "0.06em",
                    textTransform: "uppercase",
                  }}
                >
                  Zjistit více o projektu
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </div>
              </div>

              {/* Bottom accent */}
              <div
                style={{
                  position: "absolute",
                  bottom: 0,
                  left: 0,
                  height: "3px",
                  width: "48px",
                  background: "#fcdb00",
                }}
              />
            </a>
          ))}
        </div>

        {/* Google Map - na omezenou šířku webu */}
        <div
          style={{
            background: "#ffffff",
            borderRadius: "4px",
            overflow: "hidden",
            border: "1px solid rgba(3,56,105,0.1)",
            boxShadow: "0 2px 8px rgba(3,56,105,0.06)",
            marginBottom: "72px",
          }}
        >
          {/* Category tags above map */}
          <div
            style={{
              padding: "20px 24px",
              background: "#ffffff",
              borderBottom: "1px solid rgba(3,56,105,0.08)",
              display: "flex",
              flexWrap: "wrap",
              gap: "8px",
              alignItems: "center",
            }}
          >
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#033869" strokeWidth="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <span
              style={{
                color: "#033869",
                fontSize: "0.72rem",
                fontWeight: 700,
                letterSpacing: "0.08em",
                textTransform: "uppercase",
              }}
            >
              Projekty v ČR:
            </span>
            {["Stavební práce", "Revize & Inspekce", "Podzemní práce", "Speciální práce", "Strojní práce", "Video & Průzkum"].map((tag, i) => (
              <span
                key={i}
                style={{
                  background: "#f0f2f5",
                  color: "#42454e",
                  fontSize: "0.7rem",
                  fontWeight: 600,
                  letterSpacing: "0.04em",
                  padding: "4px 10px",
                  borderRadius: "3px",
                  border: "1px solid rgba(3,56,105,0.08)",
                }}
              >
                {tag}
              </span>
            ))}
          </div>

          {/* Map iframe */}
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2600000!2d15.472962!3d49.817492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2scz!4v1234567890"
            width="100%"
            height="600px"
            style={{ border: 0, display: "block" }}
            allowFullScreen
            loading="lazy"
            referrerPolicy="no-referrer-when-downgrade"
            title="Mapa České republiky"
          />
        </div>

        {/* Client logos */}
        <div
          style={{
            background: "#033869",
            borderRadius: "4px",
            padding: "48px 52px",
          }}
        >
          <p
            style={{
              color: "rgba(226,232,240,0.6)",
              fontSize: "0.75rem",
              fontWeight: 700,
              letterSpacing: "0.16em",
              textTransform: "uppercase",
              textAlign: "center",
              marginBottom: "32px",
            }}
          >
            Klíčoví partneři a zadavatelé
          </p>
          <div
            style={{
              display: "flex",
              flexWrap: "wrap",
              justifyContent: "center",
              gap: "12px",
            }}
          >
            {clients.map((client, i) => (
              <div
                key={i}
                style={{
                  background: "rgba(255,255,255,0.07)",
                  border: "1px solid rgba(255,255,255,0.12)",
                  borderRadius: "3px",
                  padding: "12px 22px",
                  transition: "all 0.2s",
                  cursor: "default",
                }}
                onMouseEnter={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "rgba(252,219,0,0.1)";
                  (e.currentTarget as HTMLElement).style.borderColor = "rgba(252,219,0,0.3)";
                }}
                onMouseLeave={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "rgba(255,255,255,0.07)";
                  (e.currentTarget as HTMLElement).style.borderColor = "rgba(255,255,255,0.12)";
                }}
              >
                <span
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "0.95rem",
                    fontWeight: 700,
                    color: "#ffffff",
                    letterSpacing: "0.04em",
                    textTransform: "uppercase",
                    whiteSpace: "nowrap",
                  }}
                >
                  {client}
                </span>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}