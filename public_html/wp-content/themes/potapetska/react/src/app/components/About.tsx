import teamImg from "figma:asset/f253eada3b3fea1fce8818279ea73f3a35c7fc62.png";
import iso14001 from "figma:asset/dd408c73915d423b971ab2c61f9698dfe19dfdbd.png";
import iso45001 from "figma:asset/5ea6e05c4c553154dd115504e7d96a2cac66605a.png";
import iso9001 from "figma:asset/e72f67da35b04e9bfc933ae8962db0791b841a0a.png";

const certImages = [
  { img: iso9001, label: "ISO 9001", desc: "Systém managementu kvality" },
  { img: iso14001, label: "ISO 14001", desc: "Environmentální management" },
  { img: iso45001, label: "ISO 45001", desc: "Bezpečnost a ochrana zdraví" },
];

export function About() {
  return (
    <section
      id="o-nas"
      style={{
        fontFamily: "'Barlow', sans-serif",
        background: "#ffffff",
        padding: "100px 0 100px",
        overflow: "hidden",
      }}
    >
      <div className="max-w-screen-xl mx-auto px-6">
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "1fr 1fr",
            gap: "80px",
            alignItems: "center",
          }}
          className="lg:grid-cols-2 grid-cols-1"
        >
          {/* Left: text */}
          <div>
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
                O nás
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
                marginBottom: "24px",
              }}
            >
              30 let expertízy
            </h2>

            <p style={{ color: "#6b7280", fontSize: "1rem", lineHeight: 1.8, marginBottom: "20px" }}>
              Potápěčská stanice, a.s. byla founded počátkem roku 1990 a navázala na
              předrevoluční tradici profesionálních potápěčských pracovišť při Povodí Ohře
              a Povodí Vltava. Více než 30 let budujeme pozici nejspolehlivější potápěčské
              společnosti v České republice.
            </p>
            <p style={{ color: "#6b7280", fontSize: "1rem", lineHeight: 1.8, marginBottom: "36px" }}>
              Disponujeme kompletním vybavením včetně mobilních dekompresních komor,
              digitálních videosystémů a přilbových kamer s přímým přenosem obrazu na
              hladinu. Ročně odpracujeme přes 3 000 hodin pod vodou.
            </p>

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
                background: "#033869",
                color: "#ffffff",
                fontSize: "0.85rem",
                fontWeight: 700,
                letterSpacing: "0.1em",
                textTransform: "uppercase",
                textDecoration: "none",
                padding: "14px 32px",
                borderRadius: "3px",
                transition: "all 0.2s",
              }}
              onMouseEnter={(e) => {
                (e.currentTarget as HTMLElement).style.background = "#022d5e";
                (e.currentTarget as HTMLElement).style.boxShadow = "0 8px 24px rgba(3,56,105,0.3)";
              }}
              onMouseLeave={(e) => {
                (e.currentTarget as HTMLElement).style.background = "#033869";
                (e.currentTarget as HTMLElement).style.boxShadow = "none";
              }}
            >
              Více o nás
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>

          {/* Right: image + certs */}
          <div>
            {/* Image */}
            <div
              style={{
                position: "relative",
                borderRadius: "4px",
                overflow: "hidden",
                marginBottom: "24px",
                height: "300px",
              }}
            >
              <img
                src={teamImg}
                alt="Potápěčská Stanice – tým v akci"
                style={{ width: "100%", height: "100%", objectFit: "cover", objectPosition: "center 50%" }}
              />
              <div
                style={{
                  position: "absolute",
                  inset: 0,
                  background: "linear-gradient(to top, rgba(3,56,105,0.7) 0%, transparent 60%)",
                }}
              />
              {/* Years badge */}
              <div
                style={{
                  position: "absolute",
                  bottom: "20px",
                  left: "20px",
                  display: "flex",
                  alignItems: "flex-end",
                  gap: "8px",
                }}
              >
                <span
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "3.5rem",
                    fontWeight: 900,
                    color: "#fcdb00",
                    lineHeight: 1,
                  }}
                >
                  30+
                </span>
                <span
                  style={{
                    color: "#ffffff",
                    fontSize: "0.85rem",
                    fontWeight: 500,
                    paddingBottom: "8px",
                    letterSpacing: "0.04em",
                  }}
                >
                  let praxe
                </span>
              </div>
            </div>

            {/* Cert badges */}
            <div
              style={{
                display: "flex",
                alignItems: "center",
                gap: "16px",
                padding: "16px 20px",
                background: "#f8f9fb",
                border: "1px solid rgba(3,56,105,0.08)",
                borderRadius: "4px",
              }}
            >
              <span
                style={{
                  color: "#9ca3af",
                  fontSize: "0.68rem",
                  fontWeight: 700,
                  letterSpacing: "0.1em",
                  textTransform: "uppercase",
                  whiteSpace: "nowrap",
                  flexShrink: 0,
                }}
              >
                Certifikace:
              </span>
              <div style={{ display: "flex", alignItems: "center", gap: "12px" }}>
                {certImages.map((c) => (
                  <div
                    key={c.label}
                    style={{
                      display: "flex",
                      flexDirection: "column",
                      alignItems: "center",
                      gap: "4px",
                    }}
                    title={`${c.label} – ${c.desc}`}
                  >
                    <img
                      src={c.img}
                      alt={c.label}
                      style={{
                        height: "60px",
                        width: "60px",
                        objectFit: "contain",
                        opacity: 0.85,
                      }}
                    />
                    <span
                      style={{
                        fontSize: "0.65rem",
                        fontWeight: 700,
                        color: "#6b7280",
                        letterSpacing: "0.04em",
                        textTransform: "uppercase",
                      }}
                    >
                      {c.label}
                    </span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Rounded transition element - removed */}
    </section>
  );
}