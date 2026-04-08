import logoImg from "figma:asset/879fb8aa6a825e6794fa2277cfbdaf481e3af546.png";
import iso14001 from "figma:asset/dd408c73915d423b971ab2c61f9698dfe19dfdbd.png";
import iso45001 from "figma:asset/5ea6e05c4c553154dd115504e7d96a2cac66605a.png";
import iso9001 from "figma:asset/e72f67da35b04e9bfc933ae8962db0791b841a0a.png";

const serviceLinks = [
  "Stavební potápěčské práce",
  "Strojní potápěčské práce",
  "Záchranářské potápěčské práce",
  "Podzemní potápěčské práce",
  "Poradenství pro potápěčské práce",
  "Speciální potápěčské práce",
  "Práce v průmyslových nádržích",
  "Video & Fotodokumentace",
  "Výuka pracovních potápěčů",
  "Soudní znalec",
  "Autorizovaná osoba MZe ČR",
];

const memberships = [
  { abbr: "EDTC", name: "European Diving Technology Committee" },
  { abbr: "APPČR", name: "Asociace pracovního potápění ČR" },
  { abbr: "MZe ČR", name: "Autorizovaná osoba – pracovní potápění" },
  { abbr: "Soudní znalec", name: "Technické obory & bezpečnost práce" },
];

const certImages = [
  { img: iso9001, label: "ISO 9001" },
  { img: iso14001, label: "ISO 14001" },
  { img: iso45001, label: "ISO 45001" },
];

export function Footer() {
  const year = new Date().getFullYear();

  const scrollTo = (href: string) => {
    const el = document.querySelector(href);
    if (el) el.scrollIntoView({ behavior: "smooth" });
  };

  const linkStyle: React.CSSProperties = {
    color: "rgba(226,232,240,0.5)",
    fontSize: "0.82rem",
    textDecoration: "none",
    lineHeight: "2.1",
    display: "block",
    transition: "color 0.2s",
    cursor: "pointer",
  };

  return (
    <footer
      style={{
        fontFamily: "'Barlow', sans-serif",
        background: "#221d17",
        borderTop: "3px solid #fcdb00",
      }}
    >
      {/* Main footer content */}
      <div
        className="max-w-screen-xl mx-auto px-6"
        style={{ padding: "56px 24px 0" }}
      >
        {/* 3-column row */}
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "220px 1fr 200px",
            gap: "48px",
            alignItems: "start",
            paddingBottom: "40px",
            borderBottom: "1px solid rgba(255,255,255,0.07)",
          }}
          className="lg:grid-cols-[220px_1fr_200px] grid-cols-1"
        >
          {/* Brand */}
          <div>
            <img
              src={logoImg}
              alt="Potápěčská Stanice a.s."
              style={{ height: "60px", width: "auto", marginBottom: "16px", display: "block" }}
            />
            <p style={{ color: "rgba(226,232,240,0.4)", fontSize: "0.8rem", lineHeight: 1.75, marginBottom: "16px" }}>
              Profesionální potápěčské práce a soudní znalectví od roku 1990.
            </p>
            
            {/* Placeholder for company mascot dog photo */}
            <div
              style={{
                width: "140px",
                height: "140px",
                background: "rgba(255,255,255,0.05)",
                border: "2px dashed rgba(252,219,0,0.3)",
                borderRadius: "8px",
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
              }}
            >
              <div style={{ textAlign: "center", color: "rgba(226,232,240,0.3)", fontSize: "0.7rem" }}>
                <div style={{ fontSize: "2rem", marginBottom: "4px" }}>🐕</div>
                <div>Firemní maskot</div>
                <div style={{ fontSize: "0.65rem" }}>(foto)</div>
              </div>
            </div>
          </div>

          {/* Services */}
          <div>
            <h4
              style={{
                fontFamily: "'Barlow Condensed', sans-serif",
                fontSize: "0.75rem",
                fontWeight: 800,
                color: "#ffffff",
                textTransform: "uppercase",
                letterSpacing: "0.14em",
                marginBottom: "12px",
                paddingBottom: "10px",
                borderBottom: "1px solid rgba(255,255,255,0.07)",
              }}
            >
              Naše služby
            </h4>
            
            <div style={{ columns: "2", columnGap: "24px" }}>
              {serviceLinks.map((s, i) => (
                <a
                  key={i}
                  href="#sluzby"
                  onClick={(e) => { e.preventDefault(); scrollTo("#sluzby"); }}
                  style={linkStyle}
                  onMouseEnter={(e) => { (e.currentTarget as HTMLElement).style.color = "#fcdb00"; }}
                  onMouseLeave={(e) => { (e.currentTarget as HTMLElement).style.color = "rgba(226,232,240,0.5)"; }}
                >
                  {s}
                </a>
              ))}
            </div>
          </div>

          {/* Contact */}
          <div>
            <h4
              style={{
                fontFamily: "'Barlow Condensed', sans-serif",
                fontSize: "0.75rem",
                fontWeight: 800,
                color: "#ffffff",
                textTransform: "uppercase",
                letterSpacing: "0.14em",
                marginBottom: "12px",
                paddingBottom: "10px",
                borderBottom: "1px solid rgba(255,255,255,0.07)",
              }}
            >
              Kontakt
            </h4>
            <div style={{ display: "flex", flexDirection: "column", gap: "12px" }}>
              <div>
                <div style={{ color: "rgba(226,232,240,0.4)", fontSize: "0.67rem", fontWeight: 700, letterSpacing: "0.1em", textTransform: "uppercase", marginBottom: "3px" }}>Telefon</div>
                <a href="tel:+420312681158" style={{ color: "#fcdb00", fontSize: "0.9rem", fontWeight: 700, textDecoration: "none" }}>
                  +420 312 681 158
                </a>
              </div>
              <div>
                <div style={{ color: "rgba(226,232,240,0.4)", fontSize: "0.67rem", fontWeight: 700, letterSpacing: "0.1em", textTransform: "uppercase", marginBottom: "3px" }}>E-mail</div>
                <a href="mailto:info@potapecska-stanice.cz" style={{ color: "rgba(226,232,240,0.6)", fontSize: "0.8rem", textDecoration: "none" }}>
                  info@potapecska-stanice.cz
                </a>
              </div>
              <div>
                <div style={{ color: "rgba(226,232,240,0.4)", fontSize: "0.67rem", fontWeight: 700, letterSpacing: "0.1em", textTransform: "uppercase", marginBottom: "3px" }}>Sídlo</div>
                <span style={{ color: "rgba(226,232,240,0.6)", fontSize: "0.8rem" }}>Kladno, Česká republika</span>
              </div>
            </div>

            <div style={{ marginTop: "18px", display: "flex", flexDirection: "column", gap: "0" }}>
              {["GDPR & Soukromí", "Obchodní podmínky"].map((label) => (
                <a
                  key={label}
                  href="#"
                  onClick={(e) => e.preventDefault()}
                  style={linkStyle}
                  onMouseEnter={(e) => { (e.currentTarget as HTMLElement).style.color = "#fcdb00"; }}
                  onMouseLeave={(e) => { (e.currentTarget as HTMLElement).style.color = "rgba(226,232,240,0.5)"; }}
                >
                  {label}
                </a>
              ))}
            </div>
          </div>
        </div>

        {/* Certifications + Memberships row */}
        <div
          style={{
            padding: "24px 0 28px",
            borderBottom: "1px solid rgba(255,255,255,0.06)",
            display: "flex",
            alignItems: "center",
            gap: "32px",
            flexWrap: "wrap",
          }}
        >
          {/* ISO cert logos */}
          <div style={{ display: "flex", alignItems: "center", gap: "8px" }}>
            <span
              style={{
                color: "rgba(226,232,240,0.35)",
                fontSize: "0.67rem",
                fontWeight: 700,
                letterSpacing: "0.12em",
                textTransform: "uppercase",
                whiteSpace: "nowrap",
                marginRight: "4px",
              }}
            >
              Certifikace:
            </span>
            {certImages.map((c) => (
              <div
                key={c.label}
                style={{ display: "flex", flexDirection: "column", alignItems: "center", gap: "4px" }}
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
              </div>
            ))}
          </div>

          {/* Divider */}
          <div style={{ width: "1px", height: "44px", background: "rgba(255,255,255,0.1)", flexShrink: 0 }} />

          {/* Membership text badges */}
          <div style={{ display: "flex", alignItems: "center", gap: "8px", flexWrap: "wrap" }}>
            <span
              style={{
                color: "rgba(226,232,240,0.35)",
                fontSize: "0.67rem",
                fontWeight: 700,
                letterSpacing: "0.12em",
                textTransform: "uppercase",
                whiteSpace: "nowrap",
                marginRight: "4px",
              }}
            >
              Členství:
            </span>
            {memberships.map((m) => (
              <div
                key={m.abbr}
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: "6px",
                  padding: "5px 12px",
                  background: "rgba(255,255,255,0.04)",
                  border: "1px solid rgba(255,255,255,0.08)",
                  borderLeft: "2px solid #fcdb00",
                  borderRadius: "2px",
                }}
                title={m.name}
              >
                <span
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "0.8rem",
                    fontWeight: 800,
                    color: "#fcdb00",
                    letterSpacing: "0.06em",
                    textTransform: "uppercase",
                    whiteSpace: "nowrap",
                  }}
                >
                  {m.abbr}
                </span>
              </div>
            ))}
          </div>
        </div>
      </div>

      {/* Bottom bar */}
      <div style={{ padding: "14px 24px" }}>
        <div
          className="max-w-screen-xl mx-auto"
          style={{
            display: "flex",
            justifyContent: "space-between",
            alignItems: "center",
            flexWrap: "wrap",
            gap: "10px",
          }}
        >
          <p style={{ color: "rgba(226,232,240,0.3)", fontSize: "0.74rem", margin: 0 }}>
            © {year} Potápěčská Stanice a.s. Všechna práva vyhrazena. IČO: 25143861
          </p>
          <a
            href="https://digihood.cz/tvorba-webovych-stranek/design-webovych-stranek"
            target="_blank"
            rel="noopener noreferrer"
            style={{
              color: "rgba(226,232,240,0.3)",
              fontSize: "0.74rem",
              textDecoration: "none",
              transition: "color 0.2s",
            }}
            onMouseEnter={(e) => { (e.currentTarget as HTMLElement).style.color = "#fcdb00"; }}
            onMouseLeave={(e) => { (e.currentTarget as HTMLElement).style.color = "rgba(226,232,240,0.3)"; }}
          >
            Webdesign digihood
          </a>
        </div>
      </div>
    </footer>
  );
}